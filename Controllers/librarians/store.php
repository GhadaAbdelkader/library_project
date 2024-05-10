<?php
// dd('hello');
require 'Validator.php';

$config = require('Database/config.php');

$db = new Database($config['database']);


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
    $db->query('INSERT INTO librarians (name, email, phone, password) VALUES
        (:name, :email, :phone, :password)', [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'password' => $_POST['password'],
        ]);

    // Redirect to a success page or perform any other actions
    header('Location:/librarians/create');
    exit();
}  else {
   
    header('Location:/librarians/create');
    exit();
};




