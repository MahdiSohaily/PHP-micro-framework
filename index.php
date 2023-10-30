<!-- Front controller -->
<?php

use App\Core\Routing\Route;
use App\Core\Routing\Router;

include_once('./bootstrap/init.php');

Route::add(['get', 'post'], '/s', function () {
    echo '<div class=""> Hello</div>';
});

Route::post('/', function () {
});

Route::get('/s', function () {
});


$router = new Router();


