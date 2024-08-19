<?php

use User\Http\Controllers\UserController;

Route::get('/login', UserController::class . '@showLoginPage')->name('login-page');
Route::get('/register', UserController::class . '@showRegisterPage')->name('register-page');
