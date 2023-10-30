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
        $this->current_route = $this->findRoute($this->request) ?? null;
    }

    public function findRoute(Request $request)
    {
        foreach ($this->routes as $route) {
            if (in_array($request->getMethod(), $route['method']) && $request->getUri() == $route['uri']) {
                return $route;
            }
        }
        return null;
    }

    public function run()
    {
        if (is_null($this->current_route)) {
            $this->dispatch404();
        }

        if ($this->invalidRequest($this->request)) {
            $this->dispatch405();
            die("Invalid request");
        }
    }


    private function invalidRequest(Request $request)
    {
        foreach ($this->routes as $route) {
            if ($request->getUri() == $route['uri']) {
                return !in_array($request->getMethod(), $route['method']);
            }
        }
    }

    private function dispatch405()
    {
        header("HTTP/1.0 405 Method Not Allowed");
    }

    private function dispatch404()
    {
        header("HTTP/1.0 404 Not Found");
        view("errors.404");
        die();
    }

    private function dispatch()
    {
    }
}
