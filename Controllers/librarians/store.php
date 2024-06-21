<?php
require 'Validator.php';


$errors = [];

$config = require('Database/config.php');
$database = new Database($config['database']);
$librarian = new dataOperation($database);
$errors         = $librarian-> errors = [];

$array = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'password' => $_POST['password'],
    'image_url' => Validator::uploadImage($errors)
];
if (empty($errors)) {
    $librarian->insert('librarians', $array);
    header('Location:/librarians/create?created');
    exit();
} else {
    $errorParams = http_build_query(['errors' => $errors]);

    $queryString = http_build_query([
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'password' => $_POST['password']
    ]);
    header('Location:/librarians/create?' . $queryString . "&" . $errorParams);
    exit();
}

