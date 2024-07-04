<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AudioFileController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UpgradeController;

Route::get('/', [LandingPageController::class, 'index'])->name('landing');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/audio-files', [AudioFileController::class, 'index'])->name('audio_files.index');
    Route::get('/audio-files/create', [AudioFileController::class, 'create'])->name('audio_files.create');
    Route::post('/audio-files', [AudioFileController::class, 'store'])->name('audio_files.store');
    Route::get('/audio-files/{audioFile}', [AudioFileController::class, 'show'])->name('audio_files.show');

    Route::post('/stripe/create-checkout-session', [StripeController::class, 'createCheckoutSession'])->name('stripe.create-checkout-session');
    Route::get('/stripe/success', [StripeController::class, 'success'])->name('stripe.success');
    Route::get('/stripe/cancel', [StripeController::class, 'cancel'])->name('stripe.cancel');
});

Route::get('/srt-transcription', [LandingPageController::class, 'srtLanding'])->name('srt.landing');
Route::get('/vtt-transcription', [LandingPageController::class, 'vttLanding'])->name('vtt.landing');

Route::get('login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/upgrade', [UpgradeController::class, 'show'])->name('upgrade');

Route::post('/audio-files/{audioFile}/generate-summary', [AudioFileController::class, 'generateSummary'])->name('audio_files.generate-summary');
Route::post('/audio-files/{audioFile}/translate', [AudioFileController::class, 'translate'])->name('audio_files.translate');

// Email Verification Routes (only for standard email registration)
Route::middleware(['auth'])->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');

    Route::post('/email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
});

require __DIR__.'/auth.php';