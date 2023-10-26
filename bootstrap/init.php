<?php
define('BASEPATH', __DIR__ . '/../');
include_once BASEPATH . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();
