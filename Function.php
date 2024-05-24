<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}
function validateFormData(&$errors)
{
    // Name validation
    if (!Validator::string($_POST['name'], 1, 255)) {
        $errors['name'] = 'A name is required and not more than 255 chars';
    }

    // Phone validation
    if (!Validator::phone($_POST['phone'], 11, 50)) {
        $errors['phone'] = 'A phone is required and must be a number in range between 11 and 50';
    }

    // Email validation
    if (!Validator::email($_POST['email'])) {
        $errors['email'] = 'Invalid email format';
    }

    // Password validation
    $passwordValidationResult = Validator::password($_POST['password']);
    if ($passwordValidationResult !== true) {
        $errors['password'] = $passwordValidationResult;
    }

}
