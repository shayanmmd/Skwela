<?php

namespace Blog\Providers;

use Illuminate\Support\ServiceProvider;

class BlogProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . './../Routes/BlogRoutes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resourses/Views', 'BlogViews');
    }
}
