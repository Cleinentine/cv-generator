<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home')->name('home');
Route::inertia('/contact', 'Contact')->name('contact');
Route::inertia('/feedback', 'Feedback')->name('feedback');
Route::inertia('/forgot', 'Forgot')->name('forgot');
Route::inertia('/login', 'Login')->name('login');
Route::inertia('/privacy', 'Privacy')->name('privacy');
Route::inertia('/terms', 'Terms')->name('terms');

Route::get('register', [UserController::class, 'create'])->name('register');

Route::post('register', [UserController::class, 'store']);
Route::post('login', [AuthController::class, 'login']);