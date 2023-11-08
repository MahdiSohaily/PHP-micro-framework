<!-- Front controller -->
<?php

use App\Core\Routing\Router;
use App\Models\Contracts\mysqlBaseModel;
use App\Models\User;

include_once('./bootstrap/init.php');



$mysql = new mysqlBaseModel();

$user = new User();

print_r($user->delete([$user->primaryKey => 6]));

$router = new Router();
$router->run();
