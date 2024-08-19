<?php

use About\Providers\AboutProvider;
use Blog\Providers\BlogProvider;
use Contact\Providers\ContactProvider;

return [
    App\Providers\AppServiceProvider::class,
    AboutProvider::class,
    ContactProvider::class,
    BlogProvider::class
];
