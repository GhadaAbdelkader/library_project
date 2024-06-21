<?php
// dd('hello');
require 'Validator.php';



$config         = require('Database/config.php');
$database       = new Database($config['database']);
$librarian      = new dataOperation($database);
$errors         = $librarian-> errors = [];


if (! Validator::validateId($_GET['id']) ){
$errors['id'] = 'Invalid ID';
}
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

// Image upload
$image_url = Validator::uploadImage($errors);
if (!$image_url && !isset($errors['file'])) {
    $image_url = $_POST['old_image_url']; // Use old image URL if upload failed or no file uploaded
}

$id             = $librarian-> id = $_GET['id'];

$array = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'image_url' => $image_url // Assuming $image_url is set from file upload handling
];
if (empty($errors)) {
    $librarian->update('librarians',  $id, $array);
    header('Location: /librarians/show?edit');
    exit();
} else {

        $errorParams = http_build_query(['errors' => $errors]);

        $queryString = http_build_query([
            'id' => $_GET['id'], // Retrieve the 'id' parameter from the URL
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'image_url' => $_POST['image_url'],

        ]);
        header('Location:/librarians/edit?' . $queryString . "&" . $errorParams );
        exit();

}




