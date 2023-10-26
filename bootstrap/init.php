<?php
define('BASE_PATH', __DIR__ . '/../');

require_once(BASE_PATH . '/vendor/autoload.php');
require_once(BASE_PATH . '/helpers/url_helpers.php');


$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();
