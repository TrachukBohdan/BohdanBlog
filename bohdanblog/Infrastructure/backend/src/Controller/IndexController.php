<?php

namespace Infrastructure\Controller;

use Symfony\Component\HttpFoundation\Response;

class IndexController
{
    public function index(): Response
    {
        return new Response();
    }
}