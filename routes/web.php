<?php

use App\Core\Routing\Route;
use App\Middlewares\BlockFirefox;


Route::post('/', function () {
    echo 'Welcome to the Home Page';
}, [BlockFirefox::class]);


Route::add(['post'], '/home', function () {
    echo '<h1 class=""> Hello</h1>';
});

Route::get('/post/{slug}', ['ProductsController', 'post']);

Route::post('/create', null);

Route::get('/about', function () {
    echo 'welcome to the About Page';
});

Route::get('/products', 'ProductsController@show', [BlockFirefox::class]);
