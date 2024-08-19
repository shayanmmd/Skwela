<?php

namespace Contact\Providers;

use Illuminate\Support\ServiceProvider;

class ContactProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . './../Routes/ContactRoutes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resourses/Views', 'ContactViews');
    }
}
