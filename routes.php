<?php 


// $routes = [
//     '/'                              => 'Controllers/index.php',
//     '/librarians/create'             => 'Controllers/librarians/create.php',
//     '/librarians/edit'               => 'Controllers/librarians/edit.php',
//     '/librarians/show'               => 'Controllers/librarians/show.php',
//     '/clients/create'                => 'Controllers/clients/create.php',
//     '/clients/edit'                  => 'Controllers/clients/edit.php',
//     '/clients/show'                  => 'Controllers/clients/show.php',
//     '/books/create'                  => 'Controllers/books/create.php',
//     '/books/edit'                    => 'Controllers/books/edit.php',
//     '/books/show'                    => 'Controllers/books/show.php',
//     '/suggestionsAndRate/create'     => 'Controllers/suggestionsAndRate/create.php',
//     '/suggestionsAndRate/edit'       => 'Controllers/suggestionsAndRate/edit.php',
//     '/suggestionsAndRate/show'       => 'Controllers/suggestionsAndRate/show.php',
//     '/notifications/create'          => 'Controllers/notifications/create.php',
//     '/notifications/edit'            => 'Controllers/notifications/edit.php',
//     '/notifications/show'            => 'Controllers/notifications/show.php',
//     '/login'                         => 'Controllers/login/login.php',
// ];

$router ->get('/', 'Controllers/index.php');
$router ->get('/librarians/create', 'Controllers/librarians/create.php');
$router ->post('/librarians/create', 'Controllers/librarians/store.php');

$router ->get('/librarians/edit', 'Controllers/librarians/edit.php');

$router ->get('/librarians/show', 'Controllers/librarians/show.php');
$router ->delete('/librarians/show', 'Controllers/librarians/destroy.php');

// dd($router->routes);