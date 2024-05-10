<?php


// $sub_heading = "librarians";
// $name = "librarians";


$config = require('Database/config.php');

$db = new Database($config['database']);



    $db->query('delete from librarians where id = :id', [
        'id' => $_POST['id']

    ]);
    header('Location:/librarians/show');
    exit();



