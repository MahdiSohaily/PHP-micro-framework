<!-- Front controller -->
<?php

use App\Core\Routing\Route;
use App\Core\Routing\Router;

include_once('./bootstrap/init.php');

Route::add(['get', 'post'], '/home', function () {
    echo '<div class=""> Hello</div>';
});

Route::post('/create', function () {
});

Route::get('/about', function () {
});


$router = new Router();

$router->run();
