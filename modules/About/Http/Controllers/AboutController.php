<?php

namespace About\Http\Controllers;

class AboutController
{
    public function showAboutPage()
    {
        return view('AboutViews::about');
    }
}
