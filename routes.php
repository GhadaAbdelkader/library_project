<?php 




$router ->get('/', 'Controllers/index.php');
$router ->get('/librarians/create', 'Controllers/librarians/create.php');
$router ->post('/librarians/create', 'Controllers/librarians/store.php');

$router ->get('/librarians/edit', 'Controllers/librarians/edit.php');
$router ->post('/librarians/edit', 'Controllers/librarians/update.php');

$router ->get('/librarians/show', 'Controllers/librarians/show.php');
$router ->delete('/librarians/show', 'Controllers/librarians/destroy.php');

// dd($router->routes);