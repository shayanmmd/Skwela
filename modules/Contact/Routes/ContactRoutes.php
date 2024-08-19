<?php

use Contact\Http\Controllers\ContactController;

Route::get('/contact', ContactController::class . '@showContactPage')->name('contact-page');
