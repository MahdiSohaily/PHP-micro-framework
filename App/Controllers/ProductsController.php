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
        $user->name = "Somayeh";
        $user->last_name = "Rezaei";
        $user->email = "Rezaei@gmail.com";
        $user->save();

        print_r(json_encode($user->getAttributes()));
    }

    public function show()
    {
        echo "<h1>Goodbye World</h1>";
    }
}
