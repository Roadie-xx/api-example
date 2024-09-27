<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

use RoadieXX\Database;
use RoadieXX\DotEnv;
use RoadieXX\RestApi;

(new DotEnv(dirname(__DIR__) . '/.env'))->load();

$database = new Database();
// var_dump($database->run('SHOW TABLES'));
$api = new RestApi('authors', $database);

$api->execute();