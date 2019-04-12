<?php

namespace Infrastructure\Controller;

use Application\User\SayHelloToUserService;
use Symfony\Component\HttpFoundation\Response;

class UserController
{
    public function index()
    {
        die('test');
        $sayHelloToUserService = new SayHelloToUserService();
        return new Response($sayHelloToUserService->execute());
    }
}