<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CandidatController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Authentification
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');
});


// Annonces
Route::prefix('annonces')->middleware('auth:api')->group(function (){
    Route::get('/', [AnnonceController::class, 'getAllAnnonces']);
    Route::get('/{id}', [AnnonceController::class, 'getOneAnnonce']);
    Route::post('/', [AnnonceController::class, 'createAnnonce'])->middleware('checkRole:recruteur');
    Route::post('/search/{query}', [AnnonceController::class, 'searchAnnonce']);
    Route::post('/filter', [AnnonceController::class, 'filterAnnonce']);
    Route::delete('/{id}', [AnnonceController::class, 'deleteAnnonce'])->middleware('checkRole:recruteur');
    Route::patch('/{id}', [AnnonceController::class, 'updateAnnonce']);
});


// Prisonner
Route::prefix('Prisonner')->group(function () {
    Route::patch('/suspend/{id}', [CandidatController::class, 'suspend']);
    Route::patch('/activate/{id}', [CandidatController::class, 'activate']);
});