<?php

namespace Contact\Providers;

use Illuminate\Support\ServiceProvider;

class ContactProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/ContactRoutes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resourses/Views', 'ContactViews');
    }
}
