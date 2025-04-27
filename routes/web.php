<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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

        // Category Routes
        Route::prefix('/categories')->group(function(){
            Route::get('/', [CategoryController::class, 'index'])->name('admin.categories');
            Route::post('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
            Route::post('/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
            Route::post('/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.delete');
        });
    });

    
    
    // All Prisonner Routes
    Route::prefix('/prisonner')->middleware(['role:prisonner'])->group(function(){
        Route::get('/', function(){ return view('prisonner.index'); })->name('prisonner.index');
        Route::get('/profile', function(){ return view('prisonner.profile'); })->name('prisonner.profile');
        Route::get('/courses', [CourseController::class,'indexForPrisonner'])->name('prisonner.courses');
        Route::get('/courses/details/{id}', [CourseController::class, 'showForPrisonner'])->name('prisonner.course.details');
    });

    
    
    // All Teacher Routes
    Route::prefix('/teacher')->middleware(['role:teacher'])->group(function(){
        Route::get('/dashboard', function(){ return view('teacher.dashboard'); })->name('teacher.dashboard');
        Route::get('/', function(){ return view('teacher.index');} )->name('teacher');
        Route::get('/profile', function(){ return view('teacher.profile');} )->name('teacher.profile');
        

        Route::prefix('/courses')->group(function(){
            Route::get('/', function(){ return view('teacher.courses');} )->name('teacher.courses');
            Route::get('/new', [CategoryController::class, 'all'])->name('teacher.courses.new');
            Route::post('/create',[CourseController::class,'create'])->name('teacher.courses.create');
        });

        Route::get('/students', function(){ return view('teacher.students');} )->name('teacher.students');
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