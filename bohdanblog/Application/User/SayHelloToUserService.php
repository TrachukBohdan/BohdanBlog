<?php

namespace Application\User;

use Domain\User\User;

class SayHelloToUserService
{
    public function __construct()
    {
        // dependencies here
    }

    public function execute(): string
    {
        $user = new User();
        return 'Hello ' . $user->name;
    }
}