<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\auth\{LogUserInController, LogUserOutController, RegisterUserController};
use App\Http\Controllers\auth\verification\{VerificationNoticeController, VerificationHandlerController, VerificationResendingrController};
use App\Http\Controllers\auth\password\{PasswordRequestController, PasswordEmailController, PasswordRestController, PasswordUpdateController};

Route::get('/', HomeController::class)->middleware(['auth', 'verified'])->name('home');

/**
 * Auth Routes (Login, Register and Logout)
*/
Route::middleware('guest')->group(function(){
    Route::get('/login', [LogUserInController::class, 'create'])->name('login.create');
    Route::post('/login', [LogUserInController::class, 'store'])->name('login.store');
    Route::get('/register', [RegisterUserController::class, 'create'])->name('register.create');
    Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');
});

Route::middleware('auth')->group(function(){
    Route::post('/logout', LogUserOutController::class)->name('logout');
});

/**
 * Verification User Email Routes 
*/
Route::prefix('email')->group(function(){
    Route::get('/verify', VerificationNoticeController::class)->middleware('auth')->name('verification.notice');
    Route::get('/verify/{id}/{hash}', VerificationHandlerController::class)->middleware(['auth', 'signed'])->name('verification.verify');
    Route::post('/verification-notification', VerificationResendingrController::class)->middleware(['auth', 'throttle:6,1'])->name('verification.send');
});

/**
 * Reset Password Route
*/
Route::prefix('password')->group(function() {
    Route::get('/forgot', PasswordRequestController::class)->middleware('guest')->name('password.request');
    Route::post('/forgot', PasswordEmailController::class)->middleware('guest')->name('password.email');
    Route::get('/reset/{token}', PasswordRestController::class)->middleware('guest')->name('password.reset');
    Route::post('/reset', PasswordUpdateController::class)->middleware('guest')->name('password.update');
});
