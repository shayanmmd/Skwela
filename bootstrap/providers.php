<?php

use About\Providers\AboutProvider;
use Blog\Providers\BlogProvider;
use Contact\Providers\ContactProvider;
use Course\Providers\CourseProvider;
use User\Providers\UserProvider;

return [
    App\Providers\AppServiceProvider::class,
    AboutProvider::class,
    ContactProvider::class,
    BlogProvider::class,
    CourseProvider::class,
    UserProvider::class
];
