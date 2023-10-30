<!-- Front controller -->
<?php

use App\Core\Routing\Route;

include_once('./bootstrap/init.php');

Route::add(['get', 'post'], '/', function () {
    echo '<div class=""> Hello</div>';
});

Route::post('/', function () {
});

Route::get('/', function () {
});


var_dump(Route::routes());
