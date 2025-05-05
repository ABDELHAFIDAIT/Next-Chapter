<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Recruiter;
use App\Models\Media;

class RecruiterController extends Controller
{
    public function updateInformations(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'city' => 'required|integer|exists:cities,id',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:8192',
            'about' => 'required|string|max:1000',
            'established_at' => 'required|integer|min:1900|max:' . date('Y') . '|digits:4',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('recruiters/logos', 'public');
        } else {
            $logoPath = null;
        }

        $id_recruiter = Auth::user()->id;
        $f_name = $request->input('f_name');
        $l_name = $request->input('l_name');
        $phone = $request->input('phone');
        $city = $request->input('city');
        $about = $request->input('about');
        $established_at = $request->input('established_at');
        $company_name = $request->input('company_name');
        $sector = $request->input('sector');

        $user = User::findOrFail($id_recruiter);
        $user->f_name = $f_name;
        $user->l_name = $l_name;
        $user->phone = $phone;

        $user->save();

        Recruiter::create([
            'id_recruiter' => $id_recruiter,
            'id_city' => $city,
            'about' => $about,
            'logo' => $logoPath,
            'company_name' => $company_name,
            'sector' => $sector,
            'established_at' => $established_at,
        ]);

        $medias = ['github', 'linkedin', 'website', 'twitter', 'facebook', 'instagram'];

        foreach ($medias as $media) {
            Media::create([
                'type' => $media,
                'link' => null,
                'id_user' => Auth::user()->id,
            ]);
        }

        return redirect()->route('recruiter.dashboard');
    }
}
