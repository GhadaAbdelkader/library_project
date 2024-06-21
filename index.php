<?php

require 'Function.php';
require 'Database/Functions/Helpers.php';
require 'Database/Functions/displayMessages.php';
require 'Database/Database.php';


spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require ("{$class}.php");
});

$config = require('Database/config.php');
$database = new Database($config['database']);
$dataOperation = new dataOperation($database);

$router = new \Core\Router();

$routes = require ('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);












