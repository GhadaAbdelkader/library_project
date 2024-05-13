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



    if (empty($errors) && $_POST['submit'] === 'tea') {
        $db->query('INSERT INTO librarians (name, email, phone, password) VALUES
            (:name, :email, :phone, :password)', [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'password' => $_POST['password'],
            ]);
            header('Location:/librarians/Show');
                exit();
        
    
}  else {
    $errorString = json_encode($errors);

    $queryString = http_build_query([
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'password' => $_POST['password']
    ]);
    header('Location:/librarians/create?' . $queryString . '&errors=' . urlencode($errorString));
        exit();


};
// if (empty($errors) && $_POST['submit'] === 'coffee') {
//     $db->query('INSERT INTO librarians (name, email, phone) VALUES
//         (:name, :email, :phone)', [
//             'name' => $_POST['name'],
//             'email' => $_POST['email'],
//             'phone' => $_POST['phone'],
//         ]);
//         header('Location:/librarians/Show');
//             exit();
    

// }  else {
// $errorString = json_encode($errors);

// $queryString = http_build_query([
//     'name' => $_POST['name'],
//     'email' => $_POST['email'],
//     'phone' => $_POST['phone'],
// ]);
// header('Location:/librarians/edit?' . $queryString . '&errors=' . urlencode($errorString));
//     exit();


// };
// else if (empty($errors) && $_POST['submit'] === 'coffee') {
//     $db->query('INSERT INTO librarians (name, email, phone, password) VALUES
//         (:name, :email, :phone, :password)', [
//             'name' => $_POST['name'],
//             'email' => $_POST['email'],
//             'phone' => $_POST['phone'],
//         ]);

    

// }

// // Encode entered data as query parameters
//     // dd($_POST['submit']);
//     if($_POST['submit'] === 'tea'){
//         header('Location:/librarians/show');
//         exit();
//     }
//     // }else if ($_POST['submit'] === 'coffee'){
//     //     header('Location:/librarians/Show');
//     //     exit();
//     // }
//     // // Redirect to create page with entered data in URL
//     // header('Location:/librarians/create?' . $_POST['submit'] );
//     // // if (isset($_POST['action'])) {
//     // //     echo '<br />The ' . $_POST['submit'] . ' submit button was pressed<br />';
//     // // }



