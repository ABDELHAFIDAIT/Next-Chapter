<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class CourseController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'description' => 'required|string|max:500',
            'overview' => 'required|string',
            'objectifs' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // dd($validator);
        $title = $request->input('title');
        $description = $request->input('description');
        $overview = $request->input('overview');
        $objectifs = $request->input('objectifs');
    

        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('covers', 'public');
        } else {
            $coverPath = null;
        }
    

        // $teacher = DB::table('users')
        //             ->join('teachers','teachers.id_teacher','=','users.id')
        //             ->select('teachers.id')
        //             ->where('users.id','=',Auth::user()->id)
        //             ->first();
        // dd($teacher);
        
        // if (!$teacher) {
        //     return redirect()->back()->with('error', 'Teacher not found.');
        // }
 
        Course::create([
            'title' => $title,
            'cover' => $coverPath,
            'description' => $description,
            'overview' => $overview,
            'objectifs' => $objectifs,
            'id_teacher' => Auth::user()->id,
        ]);

       
    
        return redirect()->back()->with('success', 'Cours créé avec succès.');
    }
}
