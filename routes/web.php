<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PersonalAccountController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', [AuthController::class, 'showRegister'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [AuthController::class, 'register'])
    ->middleware('guest');

Route::get('/login', [AuthController::class, 'showLogin'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [AuthController::class, 'login'])
    ->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])
    ->middleware('guest')
    ->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendNewPassword'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/settings', [PersonalAccountController::class, 'showSettings'])
    ->middleware('auth')
    ->name('settings');
    
Route::post('/settings/avatar', [PersonalAccountController::class, 'updateAvatar'])
    ->middleware('auth')
    ->name('settings.avatar');

Route::post('/settings/profile', [PersonalAccountController::class, 'updateProfile'])
    ->middleware('auth')
    ->name('settings.profile');
