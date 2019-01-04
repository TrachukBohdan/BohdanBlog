<?php

namespace App\Application\User;

class SayHelloToUserService
{
    public function __construct()
    {
        // dependencies here
    }

    public function handle(): string
    {
        return 'hello world';
    }
}