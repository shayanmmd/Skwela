<?php

namespace Contact\Providers;

use Contact\Contracts\ContactRepositoryInterface;
use Contact\Repositories\ContactRepository;
use Illuminate\Support\ServiceProvider;

class ContactProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/ContactRoutes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resourses/Views', 'ContactViews');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
    }
}
