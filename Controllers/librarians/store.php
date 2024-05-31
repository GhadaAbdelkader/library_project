<?php
require 'Validator.php';


$errors = [];

// Name validation
//if (!Validator::string($_POST['name'], 1, 255)) {
//    $errors['name'] = 'A name is required and not more than 255 chars';
//}
//
//// Phone validation
//if (!Validator::phone($_POST['phone'], 11, 50)) {
//    $errors['phone'] = 'A phone is required and must be a number in range between 11 and 50';
//}
//
//// Email validation
//if (!Validator::email($_POST['email'])) {
//    $errors['email'] = 'Invalid email format';
//}
//// Password validation
//
//$passwordValidationResult = Validator::password($_POST['password']);
//if ($passwordValidationResult !== true) {
//    $errors['password'] = $passwordValidationResult;
//}

//$image_url = Validator::uploadImage($errors);

$array = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'password' => $_POST['password'],
    'image_url' => Validator::uploadImage($errors)
];
if (empty($errors)) {
    insertAllRecords('librarians', $array);
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

