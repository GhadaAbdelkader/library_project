<?php
require 'Validator.php';

$sub_heading = "Edit";

$name = "librarians";


$config = require('Database/config.php');

$db = new Database($config['database']);


$id = $_GET['id'];
$query = "select * from librarians where id = :id";


$admins = $db->query($query, [':id' => $id])->fetchAll();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $errors = [];


// name validation
    if (! Validator::string($_POST['name'], 1, 255)) {
        $errors['name'] = 'A name is required and not more than 255 chars';
    }

// Phone validation
if(! Validator::phone($_POST['phone'], 11, 50)) {
    $errors['phone'] = 'A phone is required and must be a number in range between 11 and 50';
}

// Email validation

if(! Validator::email($_POST['email'])) {
    $errors['email'] = 'Invalid email format';
}

if (empty($errors)) {
    $db->query("UPDATE librarians SET name = :name, email = :email, phone = :phone, password = :password WHERE id = :id", [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'password' => $_POST['password'],
        'id' => $_GET['id'],
    ]);

    header('Location:/librarians/show');
    exit();
}

};

require('Views/librarians/edit.view.php');

