<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Enrollment;

class EnrollmentController extends Controller
{
    public function enroll(Request $request){
        $validator = Validator::make($request->all(), [
            'id_prisonner' => 'required|exists:users,id',
            'id_course' => 'required|exists:courses,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Enrollment::create([
            'id_prisonner' => $request->id_prisonner,
            'id_course' => $request->id_course,
        ]);

        return redirect()->route('prisonner.course', ['id' => $request->id_course])->with('success', 'Course enrolled successfully.');
    }

    public function unenroll(Request $request){
        $validator = Validator::make($request->all(), [
            'id_course' => 'required|exists:courses,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Enrollment::where('id_prisonner', Auth::user()->id)
            ->where('id_course', $request->id_course)
            ->delete();

        return redirect()->route('prisonner.my-courses')->with('success', 'Course unenrolled successfully.');
    }
}
