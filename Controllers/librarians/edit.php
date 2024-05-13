<?php
require 'Validator.php';

$sub_heading = "Edit";

$name = "librarians";


$config = require('Database/config.php');

$db = new Database($config['database']);


    $query = "SELECT name, phone, email FROM librarians WHERE id = :id";
    $admins = $db->query($query, [':id' => $_GET['id']])->fetchAll(); 


$errors = isset($_GET['errors']) ? $_GET['errors'] : [];

require('Views/librarians/edit.view.php');

