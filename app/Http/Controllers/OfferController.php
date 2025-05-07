<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
        $offer = Offer::with(['recruiter','recruiter.user'])->withCount('applications')->findOrFail($id);

        switch(Auth::user()->role){
            case 'recruiter':
                return view('recruiter.offer.show', compact('offer'));
            case 'admin':
                return view('admin.offer.show', compact('offer'));
            case 'prisonner':
                return view('prisonner.offer.show', compact('offer'));
        }
    }

    public function index(){
        $offers = Offer::with(['recruiter','recruiter.user'])->withCount('applications')->paginate(6);
        return view('admin.offers', compact('offers'));
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
}
