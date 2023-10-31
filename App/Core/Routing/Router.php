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

        $this->dispatch($this->current_route);
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

    private function dispatch($route)
    {
        $action = $route["action"];

        if (is_null($action) || empty($action)) {
            return false;
        }

        if (is_callable($action)) {
            $action();
        }

        if (is_string($action)) {
            $fractions = explode("@", $action);
            $controller =  "App\Controllers\\" . $fractions[0];
            $method = $fractions[1];
            $this->passRequest($controller, $method);
        }

        if (is_array($action)) {
            $controller = "App\Controllers\\" . $action[0];
            $method = $action[1];
            $this->passRequest($controller, $method);
        }
    }

    function passRequest(string $controller, string $method)
    {
        if (!class_exists($controller)) {
            throw new \Exception("class $controller does not exist");
        }

        $controller_object = new $controller();

        if (!method_exists($controller_object, $method)) {
            throw new \Exception("method $method does not exist");
        }

        $controller_object->$method();
    }
}
