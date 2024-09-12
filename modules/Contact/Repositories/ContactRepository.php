<?php

namespace Contact\Repositories;

use Contact\Contracts\ContactRepositoryInterface;
use Contact\Http\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    public function store(array $payload)
    {
        if (!isset($payload))
            return false;

        $newContact = Contact::create($payload);
        
        if (!isset($newContact))
            return false;

        return true;
    }
}
