<?php

namespace User\Providers;

use Illuminate\Support\ServiceProvider;

class UserProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/UserRoutes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resourses/Views', 'UserViews');
    }
}
