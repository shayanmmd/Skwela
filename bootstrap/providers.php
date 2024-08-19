<?php

use About\Providers\AboutProvider;
use Contact\Providers\ContactProvider;

return [
    App\Providers\AppServiceProvider::class,
    AboutProvider::class,
    ContactProvider::class
];
