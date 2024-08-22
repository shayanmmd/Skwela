<?php

namespace Course\Providers;

use Illuminate\Support\ServiceProvider;

class CourseProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/CourseRoutes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resourses/Views', 'CourseViews');
    }
}
