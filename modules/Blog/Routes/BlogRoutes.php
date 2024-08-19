<?php

use Blog\Http\Controllers\BlogController;



Route::get('/blog', BlogController::class . '@showBlogPage')->name('blog-page');
