<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
    Route::get('/password', [AuthController::class, 'showChangePassword'])->name('show.change.password');
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
    });

    // All Prisonner Routes
    Route::prefix('/prisonner')->middleware(['role:prisonner'])->group(function(){
        Route::get('/', function(){ return view('prisonner.index'); })->name('prisonner.index');
        Route::get('/profile', function(){ return view('prisonner.profile'); })->name('prisonner.profile');
        Route::get('/courses', function(){ return view('prisonner.courses'); })->name('prisonner.courses');
        Route::get('/courses/details', function(){ return view('prisonner.details'); })->name('prisonner.course.details');
    });








    
    

    Route::get('/recruiter', function(){
        return view('recruiter.index');
    })->name('recruiter')->middleware(['role:recruiter']);

    Route::get('/teacher', function(){
        return view('teacher.index');
    })->name('teacher')->middleware(['role:teacher']);
});



Route::middleware(['guest'])->group(function(){
    // Login Routes
    Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    // Contact Routes
    Route::get('/contact',[ContactController::class, 'showContact'])->name('show.contact');
    Route::post('/contact',[ContactController::class, 'sendContactEmail'])->name('contact');
});