<?php

use App\Core\Routing\Route;
use App\Core\Routing\Router;


Route::add(['get', 'post'], '/home', function () {
    echo '<h1 class=""> Hello</h1>';
});

Route::post('/create', function () {
});

Route::get('/about', function () {
});

Route::get('/products', 'ProductsController@show');
Route::get('/post', ['ProductsController', 'post']);


$router = new Router();

$router->run();
