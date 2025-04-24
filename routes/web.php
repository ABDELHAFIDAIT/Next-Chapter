<?php

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

Route::get('/login', function () {
    return view('auth.login');
})->name('show.login')->middleware('guest');

Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/admin', function(){
        return view('admin.dashboard');
    })->name('admin');

    Route::get('/recruiter', function(){
        return view('recruiter.index');
    })->name('recruiter');

    Route::get('/teacher', function(){
        return view('teacher.index');
    })->name('teacher');

    Route::get('/prisonner', function(){
        return view('prisonner.index');
    })->name('prisonner');
});



