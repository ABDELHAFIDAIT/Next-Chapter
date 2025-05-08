<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Offer;

class ApplicationController extends Controller
{
    // 'id_offer',
    // 'id_candidate',
    // 'motivation_letter',
    // 'cv',
    // 'status',
    // 'message',


    public function index(){
        $applications = Application::with('offer', 'offer.recruiter.recruiter','user','user.prisonner')->orderBy('created_at', 'desc')->get();
        switch(Auth::user()->role){
            case 'recruiter':
                return view('recruiter.applications', compact('applications'));
            case 'prisonner':
                return view('prisonner.applications', compact('applications'));
        }
    }


    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'id_offer' => 'required|exists:offers,id',
            'motivation_letter' => 'required|mimes:pdf|max:5120',
            'message' => 'required|string|max:1000',
        ]);

        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        

        if ($request->hasFile('motivation_letter')) {
            $motivationLetterPath = $request->file('motivation_letter')->store('applications/motivation_letters','public');
        }else{
            $motivationLetterPath = null;
        }

        $prisonner = User::with('prisonner')->find(Auth::user()->id);
        $cv = $prisonner->prisonner->cv;

        Application::create([
            'id_offer' => $request->id_offer,
            'id_candidate' => Auth::user()->id,
            'motivation_letter' => $motivationLetterPath,
            'cv' => $cv,
            'message' => $request->message,
        ]);

        return redirect()->route('prisonner.jobs');
    }


    public function show($id){
        $application = Application::with('offer', 'offer.recruiter.recruiter','user','user.prisonner')->find($id);
        switch(Auth::user()->role){
            case 'recruiter':
                return view('recruiter.application', compact('application'));
            case 'prisonner':
                return view('prisonner.application', compact('application'));
        }
    }


    public function updateStatus(Request $request, $id){
        $application = Application::find($id);
        $application->update([
            'status' => $request->input('status'),
        ]);

        return redirect()->back()->with('success', 'Application status updated successfully.');
    }


    public function indexForPrisonner(){
        $applications = Application::with('offer', 'offer.recruiter.recruiter','user','user.prisonner')->where('id_candidate', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('prisonner.applications', compact('applications'));
    }


    public function indexForRecruiter($id){
        $applications = Application::with('offer', 'offer.recruiter.recruiter','offer.recruiter.recruiter.city','user','user.prisonner')->where('id_offer', $id)->orderBy('created_at', 'desc')->get();
        $offer = Offer::with('recruiter','recruiter.recruiter','recruiter.recruiter.city')->find($id);
        return view('recruiter.applications', compact('applications','offer'));
    }
}
