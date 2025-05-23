<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

        $course = Course::orderBy('id', 'desc')->first();
       
    
        return redirect()->route('teacher.course.create', $course);
    }

    public function complete(){
        $course = Course::orderBy('id', 'desc')->first();
        return view('teacher.courses.create', compact('course'));
    }

    public function indexForPrisonner(){
        $id_prisonner = Auth::user()->id;

        $enrolledCourseIds = \App\Models\Enrollment::where('id_prisonner', $id_prisonner)
        ->pluck('id_course');

        $courses = Course::with(['category', 'teacher'])
        ->where('status', 'published')
        ->whereNotIn('id', $enrolledCourseIds)
        ->paginate(6);
        
        $categories = Category::orderBy('name','asc')->get();
        return view('prisonner.courses', compact('courses','categories'));
    }

    public function showDetails($id){
        // $course = Course::with(['category', 'teacher','chapters', 'chapters.parts'])->orderBy('chapters.order','asc')->orderBy('parts.order','asc')->findOrFail($id);
        $course = Course::with([
            'category',
            'teacher',
            'chapters' => function ($query) {
                $query->orderBy('order', 'asc');
            },
            'chapters.parts' => function ($query) {
                $query->orderBy('order', 'asc');
            }
        ])->findOrFail($id);
        
        $suggestedCourses = Course::where('id_category', $course->id_category)
            ->where('id', '!=', $course->id)
            ->with(['category', 'teacher'])
            ->take(2)
            ->get();
        
        $others = Course::where('id_category', '!=', $course->id_category)
            ->where('id', '!=', $course->id)
            ->with(['category', 'teacher'])
            ->take(2)
            ->get();
        
        return view('prisonner.details', compact('course', 'suggestedCourses', 'others'));
    }

    public function indexForTeacher(){
        $courses = Course::with(['category', 'teacher'])->where('id_teacher', Auth::user()->id)->paginate(8);
        return view('teacher.courses', compact('courses'));
    }

    public function delete($id){
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('success', 'Cours supprimé avec succès.');
    }

    public function search(Request $request){
        $search = $request->input('search');

        $courses = Course::with(['category', 'teacher'])
            ->where(function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%")
                    ->orWhere('description', 'LIKE', "%$search%")
                    ->orWhereHas('teacher', function ($q) use ($search) {
                        $q->where('f_name', 'LIKE', "%$search%")
                            ->orWhere('l_name', 'LIKE', "%$search%");
                    });
            })
            ->paginate(6);
        
        $categories = Category::orderBy('name','asc')->get();

        return view('prisonner.search', compact('courses','categories'));

    }


    public function filterByCategory(Request $request){
        $id_category = $request->input('category');
        
        if($id_category == 0){
            return redirect()->route('prisonner.courses');
        }
        
        $courses = Course::with(['category', 'teacher'])
            ->where('status', 'published')
            ->where('id_category', $id_category)
            ->paginate(6);
        
        $categories = Category::orderBy('name','asc')->get();
    
        return view('prisonner.filter', compact('courses','categories'));
    }

    public function showForPrisonner($id){
        $course = Course::with([
            'category',
            'teacher',
            'chapters' => function ($query) {
                $query->orderBy('order', 'asc');
            },
            'chapters.parts' => function ($query) {
                $query->orderBy('order', 'asc');
            }
        ])->findOrFail($id);

        return view('prisonner.course', compact('course'));
    }

    public function showPrisonnerCourses(){
        $id_prisonner = Auth::user()->id;

        $courses = DB::table('courses')
        ->leftJoin('categories', 'courses.id_category', '=', 'categories.id')
        ->leftJoin('users', 'courses.id_teacher', '=', 'users.id')
        ->whereIn('courses.id', function ($query) use ($id_prisonner) {
            $query->select('id_course')
                ->from('enrollments')
                ->where('id_prisonner', $id_prisonner);
        })->select(
            'courses.*',
            'categories.name as category_name',
        )
        ->paginate(6);
        
        return view('prisonner.mycourses', compact('courses'));
    }

    public function showForTeacher($id){
        $course = Course::with([
            'category',
            'teacher',
            'chapters' => function ($query) {
                $query->orderBy('order', 'asc');
            },
            'chapters.parts' => function ($query) {
                $query->orderBy('order', 'asc');
            }
        ])->withCount('enrollments')->findOrFail($id);

        return view('teacher.courses.details', compact('course'));
    }

    public function showForAdmin($id){
        $course = Course::with([
            'category',
            'teacher',
            'chapters' => function ($query) {
                $query->orderBy('order', 'asc');
            },
            'chapters.parts' => function ($query) {
                $query->orderBy('order', 'asc');
            }
        ])->findOrFail($id);

        return view('admin.details', compact('course'));
    }

    public function index(){
        $courses = Course::with(['category', 'teacher'])->withCount('enrollments')->withCount('chapters')->paginate(8);
        return view('admin.courses', compact('courses'));
    }

    public function refuse($id){
        $course = Course::findOrFail($id);
        $course->status = 'refused';
        $course->save();

        return redirect()->back()->with('success', 'Course Status updated successfully.');
    }

    public function publish($id){
        $course = Course::findOrFail($id);
        $course->status = 'published';
        $course->save();

        return redirect()->back()->with('success', 'Course Status updated successfully.');
    }
}
