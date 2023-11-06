<?php

namespace App\Controllers;


class ProductsController
{

    public function post()
    {
        global $request;

        var_dump($request->getRouteParams());
    }

    public function show()
    {
        echo "<h1>Goodbye World</h1>";
    }
}
