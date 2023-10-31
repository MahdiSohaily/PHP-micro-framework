<?php

namespace App\Middleware;

use App\Middleware\interface\MiddlewareInterface;

class BlockFirefox implements MiddlewareInterface
{
    public function handle()
    {
        echo "Middleware Completed";
    }
}
