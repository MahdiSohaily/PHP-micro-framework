<!-- Front controller -->
<?php

use App\Core\Routing\Router;
use App\Models\Contracts\mysqlBaseModel;
use App\Models\User;

include_once('./bootstrap/init.php');



$mysql = new mysqlBaseModel();

$user = new User();
echo $user->create(['name' => 'Mahdi', 'last_name' => 'Rezaei' ,'email' => 'mahdi@gmail.com']);

$router = new Router();
$router->run();




// $route = '/posts/{slug}';

// $pattern = "/^" . str_replace(['/', '{', '}'], ['\/', '(?<', '>[-%\w]+)'], $route) . "$/";



// print_r($route);
// echo '<br />';
// print_r($pattern);
// echo '<br />';

// $route_pattern = '/^\/posts\/(?<slug>[-%\w]+)$/';


// $uri1 = '/posts/what-is-php';
// $uri2 = '/products/efdsd';

// preg_match($pattern, $uri1, $matches);
// var_dump($matches['slug']);
