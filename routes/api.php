<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeuanganController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login',[AuthController::class, 'login'])->name('login');


Route::middleware('auth:sanctum')->group(function () {
    // Routes untuk Kategori
    Route::post('/upload-profile-image', [KeuanganController::class, 'uploadProfileImage']);

    Route::get('/kategoris', [KategoriController::class, 'index']);
    Route::post('/kategoris', [KategoriController::class, 'store']);
    Route::put('/kategoris/{id}', [KategoriController::class, 'update']);
    Route::delete('/kategoris/{id}', [KategoriController::class, 'destroy']);

    // Routes untuk Keuangan
    Route::get('/profile', [KeuanganController::class, 'getProfile']);
    Route::get('/keuangans', [KeuanganController::class, 'index']);
    Route::post('/keuangans', [KeuanganController::class, 'store']);
    Route::put('/keuangans/{id}', [KeuanganController::class, 'update']);
    Route::delete('/keuangans/{id}', [KeuanganController::class, 'destroy']);
});
