<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LegalWorkerController;

Route::get('/', fn() => redirect('/login'));

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/dashboard', function () {
        return redirect(auth()->user()->role === 'legal_worker' ? '/legal/dashboard' : '/user/dashboard');
    });
    Route::view('/legal/dashboard', 'legal.dashboard');
    // User
    Route::get('/user/dashboard', [UserController::class, 'dashboard']);
    Route::get('/marketplace', [UserController::class, 'marketplace']);
    Route::get('/request/{id}', [UserController::class, 'showRequestForm']);
    Route::post('/request/{id}', [UserController::class, 'sendRequest']);
});