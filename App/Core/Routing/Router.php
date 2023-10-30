<?php

namespace App\Core\Routing;

use App\Core\Request;
use App\Core\Routing\Route;


class Router
{
    private $request;
    private $routes;
    private $current_route;


    public function __construct()
    {
        $this->request = new Request;
        $this->routes = Route::routes();
    }
}
