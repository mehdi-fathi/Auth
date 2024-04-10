<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\RegisterController;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\Panel\DashboardController;
use \App\Http\Controllers\Auth\LogoutController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest', 'prefix' => 'auth'], function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('auth.register');
    Route::post('/register', [RegisterController::class, 'store'])->name('auth.registerSave');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'loginPost'])->name('auth.loginPost');
});
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::get('/logout', [LogoutController::class, 'logout'])->name('dashboard.logout');
    Route::get('/index', [DashboardController::class, 'index'])->name('dashboard.index');
});
