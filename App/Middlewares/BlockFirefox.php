<?php

namespace App\Middlewares;

use App\Middlewares\interface\MiddlewareInterface;

class BlockFirefox implements MiddlewareInterface
{
    public function handle()
    {
        echo "Middleware Completed";
    }
}
