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
$database->setPdo();

// var_dump($database->run('SHOW TABLES'));

$segments = explode('/', $_SERVER['REQUEST_URI']);

// echo '<pre>';
// var_dump($_GET);
// var_dump($segments);
// echo '</pre>';

if (isset($segments[1])) {
    $api = new RestApi($segments[1], $database);
    $id = $segments[2] ?? null;

    $api->execute($id);
} else {
    // Show documentation
    echo 'Did you forget to specify what table ?';
}
