<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
use App\Models\Media;
use Illuminate\Support\Facades\Auth;

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
        $prisonners = User::with(['prisonner','prisonner.city','links'])->where('role', 'prisonner')->where('first_login',false)->paginate(5);
        return view('admin.prisonners', compact('prisonners'));
    }

    public function recruiters(){
        $recruiters = User::where( 'recruiter')->where('first_login',false)->paginate(5);
        return view('admin.recruiters', compact('recruiters'));
    }

    public function teachers(){
        $teachers = User::with('teacher')->where('role', 'teacher')->where('first_login',false)->paginate(5);
        return view('admin.teachers', compact('teachers'));
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    public function showUpdateInformations(Request $request){
        $cities = City::orderBy('name', 'asc')->get();
        if(Auth::user()->role == 'prisonner'){
            return view('pages.prisonner.update-profile', compact('cities'));
        }else if(Auth::user()->role == 'teacher'){
            return view('pages.teacher.update-profile', compact('cities'));
        }else if(Auth::user()->role == 'recruiter'){
            return view('pages.recruiter.update-profile', compact('cities'));
        }
    }
}