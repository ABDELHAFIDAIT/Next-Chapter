<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Prisonner;
use App\Models\Media;
use App\Models\City;


class PrisonnerController extends Controller
{
    public function updateInformations(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'city' => 'required|integer|exists:cities,id',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:8192',
            'about' => 'required|string|max:1000',
            'cv' => 'required|mimes:pdf|max:5120',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('prisonners/photos', 'public');
        } else {
            $photoPath = null;
        }

        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('prisonners/cv', 'public');
        } else {
            $cvPath = null;
        }

        $id_prisonner = Auth::user()->id;
        $f_name = $request->input('f_name');
        $l_name = $request->input('l_name');
        $phone = $request->input('phone');
        $city = $request->input('city');
        $about = $request->input('about');

        $user = User::findOrFail($id_prisonner);
        $user->f_name = $f_name;
        $user->l_name = $l_name;
        $user->phone = $phone;
        $user->photo = $photoPath;

        $user->save();

        Prisonner::create([
            'id_prisonner' => $id_prisonner,
            'id_city' => $city,
            'about' => $about,
            'cv' => $cvPath,
        ]);

        $medias = ['github', 'linkedin', 'website', 'twitter', 'facebook', 'instagram'];

        foreach ($medias as $media) {
            Media::create([
                'type' => $media,
                'link' => null,
                'id_user' => Auth::user()->id,
            ]);
        }

        return redirect()->route('prisonner.index');
    }

    public function showProfile(){
        $user = Auth::user();
        $prisonner = Prisonner::with('city')->where('id_prisonner', $user->id)->first();
        $links = Media::where('id_user', $user->id)->get();

        return view('prisonner.profile', compact('prisonner','links'));
    }

    public function showupdateProfile(){
        $prisonner = Prisonner::where('id_prisonner', Auth::user()->id)->first();
        $cities = City::orderBy('name','asc')->get();
        $links = Media::where('id_user', Auth::user()->id)->get();
        
        return view('prisonner.update', compact('prisonner', 'links','cities'));
    }

    public function updateProfileInfos(Request $request){
        $validator = Validator::make($request->all(), [
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'city' => 'required|integer|exists:cities,id',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:8192',
            'about' => 'required|string|max:1000',
            'cv' => 'mimes:pdf|max:5120',
        ]);

        

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('prisonners/photos', 'public');
        } else {
            $photoPath = null;
        }

        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('prisonners/cv', 'public');
        } else {
            $cvPath = null;
        }

        $id_prisonner = Auth::user()->id;
        $f_name = $request->input('f_name');
        $l_name = $request->input('l_name');
        $phone = $request->input('phone');
        $city = $request->input('city');
        $about = $request->input('about');

        $user = User::findOrFail($id_prisonner);
        $user->f_name = $f_name;
        $user->l_name = $l_name;
        $user->phone = $phone;
        $user->photo = $photoPath;

        $user->save();

        $prisonner = Prisonner::where('id_prisonner', $id_prisonner)->first();
        $prisonner->id_city = $city;
        $prisonner->about = $about;
        $prisonner->cv = $cvPath;

        $prisonner->save();

        return redirect()->route('prisonner.profile');
    }

    public function updateProfileLinks(Request $request){
        $validator = Validator::make($request->all(), [
            'github' => 'nullable|url|max:500',
            'linkedin' => 'nullable|url|max:500',
            'website' => 'nullable|url|max:500',
            'twitter' => 'nullable|url|max:500',
            'facebook' => 'nullable|url|max:500',
            'instagram' => 'nullable|url|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();
        $links = Media::where('id_user', $user->id)->get();

        foreach ($links as $link) {
            $link->link = $request->input($link->type);
            $link->save();
        }

        return redirect()->route('prisonner.profile');
    }

    public function changePassword(Request $request){
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();
        $user->password = bcrypt($request->input('password'));
        $user->save();

        
        return redirect()->route('prisonner.profile');
    }
}
