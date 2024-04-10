<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\RegisterController;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\Panel\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest', 'prefix' => 'auth'], function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'registerPost'])->name('register');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'loginPost'])->name('login');
});
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::get('/index', [DashboardController::class, 'index']);
    // Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
