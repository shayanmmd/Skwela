<?php

namespace About\Providers;

use Illuminate\Support\ServiceProvider;

class AboutProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/AboutRoute.php');
        $this->loadViewsFrom(__DIR__ . '/../Resourses/Views', 'AboutViews');
    }
}
