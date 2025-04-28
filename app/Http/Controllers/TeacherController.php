<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\City;
use App\Models\Teacher;

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
}
