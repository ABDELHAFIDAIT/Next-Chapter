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
            'id_category' => 'required|exists:categories,id',
            'level' => 'required|in:beginner,intermediate,advanced',
            'duration' => 'required|integer|min:1',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $title = $request->input('title');
        $description = $request->input('description');
        $overview = $request->input('overview');
        $objectifs = $request->input('objectifs');
        $id_category = $request->input('id_category');
        $level = $request->input('level');
        $duration = $request->input('duration');
    

        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('covers', 'public');
        } else {
            $coverPath = null;
        }
 
        Course::create([
            'title' => $title,
            'cover' => $coverPath,
            'description' => $description,
            'overview' => $overview,
            'objectifs' => $objectifs,
            'id_teacher' => Auth::user()->id,
            'id_category' => $id_category,
            'level' => $level,
            'duration' => $duration,
        ]);

       
    
        return redirect()->back()->with('success', 'Cours créé avec succès.');
    }

    public function indexForPrisonner(){
        $courses = Course::with(['category', 'teacher'])->paginate(6);
        return view('prisonner.courses', compact('courses'));
    }
}
