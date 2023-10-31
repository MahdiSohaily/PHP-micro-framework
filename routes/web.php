<?php

use App\Core\Routing\Route;
use App\Core\Routing\Router;
use App\Middleware\BlockFirefox;


Route::add(['get', 'post'], '/home', function () {
    echo '<h1 class=""> Hello</h1>';
});

Route::post('/create', function () {
});

Route::get('/about', function () {
});

Route::get('/products', 'ProductsController@show', BlockFirefox::class);
Route::get('/post', ['ProductsController', 'post']);


$router = new Router();

$router->run();
