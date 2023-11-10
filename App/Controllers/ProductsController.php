<?php

namespace App\Controllers;

use App\Models\User;


class ProductsController
{

    public function post()
    {
        global $request;

        $slug = $request->getRouteParams()["slug"];

        $user = new User($slug);

        print_r($user->remove());
    }

    public function show()
    {
        echo "<h1>Goodbye World</h1>";
    }
}
