<?php

namespace Contact\Contracts;

interface ContactRepositoryInterface 
{
    public function store(array $payload);
}
