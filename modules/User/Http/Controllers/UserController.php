<?php

namespace User\Http\Controllers;

class UserController
{
    public function showLoginPage() 
    {
        return view('UserViews::login');
    }

    public function showRegisterPage() 
    {
        return view('UserViews::register');
    }
}
