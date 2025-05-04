<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use App\Models\Media;

class TeacherController extends Controller
{
    public function updateInformations(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:8192',
            'bio' => 'required|string|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('teachers/photos', 'public');
        } else {
            $photoPath = null;
        }

        $id_teacher = Auth::user()->id;
        $f_name = $request->input('f_name');
        $l_name = $request->input('l_name');
        $phone = $request->input('phone');
        $bio = $request->input('bio');

        $user = User::findOrFail($id_teacher);
        $user->f_name = $f_name;
        $user->l_name = $l_name;
        $user->phone = $phone;
        $user->photo = $photoPath;

        $user->save();

        Teacher::create([
            'id_teacher' => $id_teacher,
            'bio' => $bio,
        ]);

        return redirect()->route('teacher.dashboard');
    }

    public function showProfile(){
        $user = Auth::user();
        $teacher = Teacher::where('id_teacher', $user->id)->first();
        $links = Media::where('id_user', $user->id)->get();

        return view('teacher.profile', compact('teacher','links'));
    }

    public function showupdateProfile(){
        $teacher = Teacher::where('id_teacher', Auth::user()->id)->first();
        $links = Media::where('id_user', Auth::user()->id)->get();
        
        return view('teacher.update', compact('teacher', 'links'));
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

    public function updateProfileInfos(Request $request){
        $validator = Validator::make($request->all(), [
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:8192',
            'bio' => 'required|string|max:1000',
        ]);

        

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('prisonners/photos', 'public');
        } else {
            $photoPath = null;
        }

        $id_teacher = Auth::user()->id;
        $f_name = $request->input('f_name');
        $l_name = $request->input('l_name');
        $phone = $request->input('phone');
        $bio = $request->input('bio');

        $user = User::findOrFail($id_teacher);
        $user->f_name = $f_name;
        $user->l_name = $l_name;
        $user->phone = $phone;
        $user->photo = $photoPath;

        $user->save();

        $prisonner = Teacher::where('id_teacher', $id_teacher)->first();
        $prisonner->bio = $bio;

        $prisonner->save();

        return redirect()->route('teacher.profile');
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

        return redirect()->route('teacher.profile');
    }
}
