<?php

use User\Http\Controllers\Auth\AuthenticatedSessionController;
use User\Http\Controllers\Auth\RegisteredUserController;

Route::middleware(['guest','web'])->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register-page');

    Route::post('register', [RegisteredUserController::class, 'store'])->name('register-store');

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login-page');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login-store');
});

Route::middleware(['auth', 'web'])->group(function () {

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
