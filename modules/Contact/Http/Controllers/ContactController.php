<?php

namespace Contact\Http\Controllers;

use Contact\Contracts\ContactRepositoryInterface;
use Contact\Http\Requests\ContactStoreRequest;

class ContactController
{

    public function __construct(
        private ContactRepositoryInterface $contactRepositoryInterface
    ) {}

    public function index()
    {
        return view('ContactViews::contact');
    }

    public function store(ContactStoreRequest $contactStoreRequest)
    {
        $isStored = $this->contactRepositoryInterface->store($contactStoreRequest->all());

        if (!$isStored) {
            session()->flash('unsuccess', 'your message has not been successfully sent. try again');
            return back();
        }

        session()->flash('success', 'your message has been successfully sent');
        return back();
    }
}
