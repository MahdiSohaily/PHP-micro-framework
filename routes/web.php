<?php

use App\Core\Routing\Route;
use App\Middlewares\BlockFirefox;


Route::get('/', function () {
    echo 'Welcome to the Home Page';
}, [BlockFirefox::class]);


Route::add(['get', 'post'], '/home', function () {
    echo '<h1 class=""> Hello</h1>';
});

Route::post('/create', null);

Route::get('/about', function () {
    echo 'welcome to the About Page';
});

Route::get('/products', 'ProductsController@show', [BlockFirefox::class]);
Route::get('/post/{slug}', ['ProductsController', 'post']);
