<?php

require 'Function.php';


//to bring only the path without any ather value 
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'Controllers/index.php',
    '/librarians/create' => 'Controllers/librarians/create.php',
    '/librarians/edit' => 'Controllers/librarians/edit.php',
    '/librarians/show' => 'Controllers/librarians/show.php',
    '/clients/create' => 'Controllers/clients/create.php',
    '/clients/edit' => 'Controllers/clients/edit.php',
    '/clients/show' => 'Controllers/clients/show.php',
    '/books/create' => 'Controllers/books/create.php',
    '/books/edit' => 'Controllers/books/edit.php',
    '/books/show' => 'Controllers/books/show.php',
];

function abort($code) {
    http_response_code($code);

    require "Views/error-{$code}.php";
    die();
}

function routeToController($uri, $routes){
    // to require the right page if the uri is existed in the routes array
    if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
    } else {
    abort(404);
    }
}

routeToController($uri, $routes);