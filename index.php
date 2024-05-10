<?php

// const BASE_PATH = __DIR__ . '/../';

// require BASE_PATH . 'Function.php';

// require base_path('Database/Database.php');
// require base_path('router.php');


require 'Function.php';

require 'Database/Database.php';


spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require ("{$class}.php");
});

$router = new \Core\Router();

$routes = require ('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);












