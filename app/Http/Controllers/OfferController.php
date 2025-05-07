<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\City;
use Illuminate\Support\Carbon;

class OfferController extends Controller
{
    // 'id_recruiter',
    // 'title',
    // 'description',
    // 'type',
    // 'closing_date',
    // 'status',


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), ([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string|in:Full Time,Part Time,Internship,CDD,CDI,Freelance',
            'closing_date' => 'required|date|after:today',
        ]));

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Offer::create([
            'id_recruiter' => Auth::user()->id,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'type' => $request->input('type'),
            'closing_date' => $request->input('closing_date'),
        ]);

        return redirect()->back()->with('success', 'Offer created successfully.');
    }

    public function delete($id){
        $offer = Offer::findOrFail($id);
        $offer->delete();

        return redirect()->back()->with('success', 'Offer deleted successfully.');
    }

    public function show($id){
        $offer = Offer::with(['recruiter','recruiter.recruiter'])->withCount('applications')->findOrFail($id);
        $city = City::findOrFail($offer->recruiter->recruiter->id_city);
        switch(Auth::user()->role){
            case 'recruiter':
                return view('recruiter.offer.show', compact('offer'));
            case 'admin':
                return view('admin.offer.show', compact('offer'));
            case 'prisonner':
                return view('prisonner.job-details', compact('offer','city'));
        }
    }

    public function index(){
        $offers = Offer::with(['recruiter','recruiter.recruiter'])->withCount('applications')->orderBy('created_at', 'desc')->paginate(6);
        $cities = City::orderBy('name', 'asc')->get();
        if(Auth::user()->role == 'admin'){
            return view('admin.offers', compact('offers','cities'));
        }
        if(Auth::user()->role == 'prisonner'){
            return view('prisonner.jobs', compact('offers','cities'));
        }
    }

    public function indexForRecruiter(){
        $recruiter = User::with(['recruiter'])->where('id', Auth::user()->id)->first();
        $offers = Offer::with(['recruiter'])->withCount('applications')->where('id_recruiter', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(4);
        return view('recruiter.offers', compact('offers', 'recruiter'));
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), ([
            'id_offer' => 'required|exists:offers,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string|in:Full Time,Part Time,Internship,CDD,CDI,Freelance',
            'closing_date' => 'required|date|after:today',
        ]));

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $offer = Offer::findOrFail($request->input('id_offer'));
        $offer->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'type' => $request->input('type'),
            'closing_date' => $request->input('closing_date'),
        ]);

        return redirect()->back()->with('success', 'Offer updated successfully.');
    }

    public function close($id){
        $offer = Offer::findOrFail($id);
        $offer->update([
            'status' => 'closed',
        ]);

        return redirect()->back()->with('success', 'Offer Closed Successfully.');
    }

    public function search(Request $request){
        $offers = Offer::with(['recruiter','recruiter.recruiter'])->withCount('applications')->where('title', 'like', '%'.$request->input('search').'%')->orderBy('created_at', 'desc')->paginate(6);
        $cities = City::orderBy('name', 'asc')->get();
        return view('prisonner.search-offer', compact('offers','cities'));
    }

    public function filter(Request $request){
        $offers = Offer::query();

        if ($request->filled('date-filter')) {
            $now = Carbon::now();
    
            switch ($request->input('date-filter')) {
                case '24_hours':
                    $offers->where('created_at', '>=', $now->copy()->subDay());
                    break;
                case '7_days':
                    $offers->where('created_at', '>=', $now->copy()->subDays(7));
                    break;
                case '14_days':
                    $offers->where('created_at', '>=', $now->copy()->subDays(14));
                    break;
            }
        }
    
        if ($request->filled('city-filter')) {
            $cityId = $request->input('city-filter');
    
            $offers->whereHas('recruiter.recruiter', function ($query) use ($cityId) {
                $query->where('id_city', $cityId);
            });
        }
    
        if ($request->filled('contract-filter') && $request->input('contract-filter') !== 'All') {
            $offers->where('type', $request->input('contract-filter'));
        }
    
        $offers = $offers->latest()->paginate(6);

        $cities = City::orderBy('name', 'asc')->get();
    
        return view('prisonner.filter-jobs', compact('offers','cities'));
    }

}
