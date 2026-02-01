<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home')->name('home');
Route::inertia('/contact', 'Contact')->name('contact');
Route::inertia('/feedback', 'Feedback')->name('feedback');
Route::inertia('/forgot', 'Forgot')->name('forgot');
Route::inertia('/login', 'Login')->name('login');
Route::inertia('/privacy', 'Privacy')->name('privacy');
Route::inertia('/register', 'Register')->name('register');
Route::inertia('/terms', 'Terms')->name('terms');