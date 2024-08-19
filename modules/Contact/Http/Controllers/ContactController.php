<?php

namespace Contact\Http\Controllers;

class ContactController
{
    public function showContactPage()
    {
        return view('ContactViews::contact');
    }
}
