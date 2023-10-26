<!-- Front controller -->
<?php

use App\Core\Request;
use App\Utilities\Url;

include_once('./bootstrap/init.php');


$request = new Request();

var_dump($request);
