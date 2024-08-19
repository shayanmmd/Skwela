<?php

use About\Http\Controllers\AboutController;

Route::get('/about', AboutController::class . '@showAboutPage')->name('about-page');
