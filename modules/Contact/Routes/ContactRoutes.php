<?php

use Contact\Http\Controllers\ContactController;

Route::middleware(['web'])->prefix('/contact')->group(function () {

    Route::get('/', [ContactController::class, 'index'])->name('contact-page');
    Route::post('/store', [ContactController::class, 'store'])->name('contact-store');
});
