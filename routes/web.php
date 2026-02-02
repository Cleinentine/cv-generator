<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::inertia('/contact', 'Contact')->name('contact');
Route::inertia('/feedback', 'Feedback')->name('feedback');
Route::inertia('/privacy', 'Privacy')->name('privacy');
Route::inertia('/terms', 'Terms')->name('terms');

Route::middleware(['guest'])->group(function () {
    Route::inertia('/forgot', 'Forgot')->name('forgot');

    Route::get('login', [AuthController::class, 'loginForm'])->name('login');
    Route::get('register', [UserController::class, 'create'])->name('register');

    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [UserController::class, 'store']);
});

Route::middleware(['auth'])->group(function () {
    Route::inertia('/', 'Home')->name('home');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
