<?php

use Course\Http\Controllers\CourseController;

Route::get('/course', CourseController::class . '@showCoursePage')->name('course-page');
