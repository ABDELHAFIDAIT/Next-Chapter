<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
        Route::get('/accounts', function(){ return view('admin.accounts'); })->name('admin.accounts');
        Route::post('/accounts/create', [AuthController::class, 'createAccount'])->name('admin.accounts.create');
    });

    // All Prisonner Routes
    Route::prefix('/prisonner')->middleware(['role:prisonner'])->group(function(){
        Route::get('/', function(){ return view('prisonner.index'); })->name('prisonner.index');
    });








    
    

    Route::get('/recruiter', function(){
        return view('recruiter.index');
    })->name('recruiter');

    Route::get('/teacher', function(){
        return view('teacher.index');
    })->name('teacher');
});



Route::middleware(['guest'])->group(function(){

    // Login Routes
    Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    // Contact Routes
    Route::get('/contact',[ContactController::class, 'showContact'])->name('show.contact');
    Route::post('/contact',[ContactController::class, 'sendContactEmail'])->name('contact');
});