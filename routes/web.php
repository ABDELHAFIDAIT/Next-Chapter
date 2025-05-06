<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PrisonnerController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\RecruiterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home')->middleware('guest');



Route::middleware(['auth'])->group(function () {
    // Logout Route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Change Password Route
    Route::get('/password', [AuthController::class, 'showChangePassword'])->name('show.change.password')->middleware(['first_login']);
    Route::post('/password/change', [AuthController::class, 'changePassword'])->name('change.password');

    // All Admin Routes
    Route::prefix('/admin')->middleware(['role:admin'])->group(function(){
        Route::get('/dashboard', function(){ return view('admin.dashboard'); })->name('admin.dashboard');
        Route::get('/accounts', [AdminController::class, 'accounts'])->name('admin.accounts');
        Route::post('/accounts/create', [AuthController::class, 'createAccount'])->name('admin.accounts.create');
        Route::post('/status/{id}',[UserController::class, 'changeStatus'])->name('change.user.status');
        Route::get('/prisonners',[UserController::class, 'prisonners'])->name('admin.prisonners');
        Route::post('/delete/{id}',[UserController::class, 'delete'])->name('admin.delete');
        Route::get('/teachers',[UserController::class, 'teachers'])->name('admin.teachers');
        Route::get('/recruiters',[UserController::class, 'recruiters'])->name('admin.recruiters');

        // Category Routes
        Route::prefix('/categories')->group(function(){
            Route::get('/', [CategoryController::class, 'index'])->name('admin.categories');
            Route::post('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
            Route::post('/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
            Route::post('/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.delete');
        });

        Route::get('/course/{id}', [CourseController::class, 'showForAdmin'])->name('admin.course');
        Route::get('/courses',[CourseController::class, 'index'])->name('admin.courses');
        Route::post('/course/refuse/{id}',[CourseController::class, 'refuse'])->name('admin.course.refuse');
        Route::post('/course/publish/{id}',[CourseController::class, 'publish'])->name('admin.course.publish');
    });

    
    
    // All Prisonner Routes
    Route::prefix('/prisonner')->middleware(['role:prisonner'])->group(function(){
        // Update Profile
        Route::get('/update-profile', [UserController::class, 'showUpdateInformations'])->name('prisonner.update.profile');
        Route::post('/update-profile', [PrisonnerController::class, 'updateInformations'])->name('prisonner.profile.update');
        Route::get('/profil-update', [PrisonnerController::class, 'showupdateProfile'])->name('prisonner.update');
        Route::post('/infos-update', [PrisonnerController::class, 'updateProfileInfos'])->name('prisonner.infos.update');
        Route::post('/links-update', [PrisonnerController::class, 'updateProfileLinks'])->name('prisonner.links.update');
        Route::post('/password-update', [PrisonnerController::class, 'changePassword'])->name('prisonner.password.update');

        Route::get('/', function(){ return view('prisonner.index'); })->name('prisonner.index');
        Route::get('/profile', [PrisonnerController::class, 'showProfile'])->name('prisonner.profile');
        Route::get('/courses', [CourseController::class,'indexForPrisonner'])->name('prisonner.courses');
        Route::get('/courses/details/{id}', [CourseController::class, 'showDetails'])->name('prisonner.course.details');
        Route::post('/courses/search', [CourseController::class, 'search'])->name('prisonner.courses.search');
        Route::post('/courses/filter', [CourseController::class, 'filterByCategory'])->name('prisonner.courses.filter');
        Route::get('/course/{id}', [CourseController::class, 'showForPrisonner'])->name('prisonner.course');

        Route::post('/course/enroll', [EnrollmentController::class, 'enroll'])->name('prisonner.course.enroll');
        Route::post('/course/unenroll', [EnrollmentController::class, 'unenroll'])->name('prisonner.course.unenroll');

        Route::get('/my-courses', [CourseController::class, 'showPrisonnerCourses'] )->name('prisonner.my-courses');
    });

    
    
    // All Teacher Routes
    Route::prefix('/teacher')->middleware(['role:teacher'])->group(function(){
        // Update Profile
        Route::get('/update-profile', [UserController::class, 'showUpdateInformations'])->name('teacher.update.profile');
        Route::post('/update-profile', [TeacherController::class, 'updateInformations'])->name('teacher.profile.update');

        Route::get('/profil-update', [TeacherController::class, 'showupdateProfile'])->name('teacher.update');
        Route::post('/password-update', [TeacherController::class, 'changePassword'])->name('teacher.password.update');
        Route::post('/infos-update', [TeacherController::class, 'updateProfileInfos'])->name('teacher.infos.update');
        Route::post('/links-update', [TeacherController::class, 'updateProfileLinks'])->name('teacher.links.update');



        Route::get('/dashboard', function(){ return view('teacher.dashboard'); })->name('teacher.dashboard');
        Route::get('/profile', [TeacherController::class, 'showProfile'])->name('teacher.profile');
        

        Route::prefix('/courses')->group(function(){
            Route::get('/', [CourseController::class, 'indexForTeacher'])->name('teacher.courses');
            Route::get('/new', [CategoryController::class, 'all'])->name('teacher.courses.new');
            Route::post('/create',[CourseController::class,'create'])->name('teacher.courses.create');
            Route::post('/delete/{id}',[CourseController::class,'delete'])->name('teacher.courses.delete');
            Route::get('/create/{course}', [CourseController::class, 'complete'])->name('teacher.course.create');
        });

        Route::get('/course/{id}', [CourseController::class, 'showForTeacher'])->name('teacher.course');

        Route::get('/students', [PrisonnerController::class, 'indexStudents'])->name('teacher.students');
    });




    // All Recruiter Routes
    Route::prefix('/recruiter')->middleware(['role:recruiter'])->group(function(){
        // Update Profile
        Route::get('/update-profile', [UserController::class, 'showUpdateInformations'])->name('recruiter.update.profile');
        Route::post('/update-profile', [RecruiterController::class, 'updateInformations'])->name('recruiter.profile.update');

        Route::get('/dashboard', function(){ return view('recruiter.dashboard'); })->name('recruiter.dashboard');
        Route::get('/profile', function(){ return view('recruiter.profile'); })->name('recruiter.profile');
        Route::get('/offers', function(){ return view('recruiter.offers'); })->name('recruiter.offers');
        Route::get('/applications', function(){ return view('recruiter.applications'); })->name('recruiter.applications');
    });



    
    

    Route::get('/recruiter', function(){
        return view('recruiter.index');
    })->name('recruiter')->middleware(['role:recruiter']);
});



Route::middleware(['guest'])->group(function(){
    // Login Routes
    Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    // Contact Routes
    Route::get('/contact',[ContactController::class, 'showContact'])->name('show.contact');
    Route::post('/contact',[ContactController::class, 'sendContactEmail'])->name('contact');
});