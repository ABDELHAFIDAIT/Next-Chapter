<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function changeStatus($id)
    {
        $user = User::findOrFail($id);
        if($user->status === 'active') {
            $user->status = 'suspended';
        } else {
            $user->status = 'active';
        }
        $user->save();

        return redirect()->back()->with('success', 'User status updated successfully.');
    }

    public function prisonners(){
        $users = User::where('role', 'prisonner')->get();
        return view('admin.prisonners', compact('users'));
    }

    public function recruiters(){
        $users = User::where('role', 'recruiter')->get();
        return view('admin.recruiters', compact('users'));
    }

    public function teachers(){
        $users = User::where('role', 'teacher')->get();
        return view('admin.teachers', compact('users'));
    }
}
