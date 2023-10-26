<!-- Front controller -->
<?php
include_once('./bootstrap/init.php');

use App\Core\Request;

new Request();

print_r($_ENV);
