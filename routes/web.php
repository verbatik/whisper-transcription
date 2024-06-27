<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AudioFileController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\StripeController;

use App\Http\Controllers\UpgradeController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [LandingPageController::class, 'index'])->name('landing');



Route::get('login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/callback', [GoogleController::class, 'handleGoogleCallback']); // Changed this line

Route::middleware(['auth'])->group(function () {
    Route::post('/stripe/create-checkout-session', [StripeController::class, 'createCheckoutSession'])->name('stripe.create-checkout-session');
    Route::get('/stripe/success', [StripeController::class, 'success'])->name('stripe.success');
    Route::get('/stripe/cancel', [StripeController::class, 'cancel'])->name('stripe.cancel');
});


Route::get('/upgrade', [UpgradeController::class, 'show'])->name('upgrade');
// Keep your existing routes below this new route

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/audio-files', [AudioFileController::class, 'index'])->name('audio_files.index');
    Route::get('/audio-files/create', [AudioFileController::class, 'create'])->name('audio_files.create');
    Route::post('/audio-files', [AudioFileController::class, 'store'])->name('audio_files.store');
    Route::get('/audio-files/{audioFile}', [AudioFileController::class, 'show'])->name('audio_files.show');
});

require __DIR__.'/auth.php';
