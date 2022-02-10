<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/appointments', [AppointmentsController::class, 'index'])->name('appointments');
    Route::get('/logout', [LogoutController::class, 'index'])->name('logout');
});

Route::middleware(['guest'])->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::get('/email/verify', [EmailVerificationController::class, 'notice'])->name('verification.notice');
Route::get('/email/verify/{id}/{activation_code}', [EmailVerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/send-verification', [EmailVerificationController::class, 'send'])->middleware(['throttle:6,1'])->name('verification.send');
Route::get('/expired', function() {
    return view('auth.expired');
})->name('expired');

?>