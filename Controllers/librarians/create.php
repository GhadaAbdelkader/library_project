<?php

require 'Validator.php';

$sub_heading = "Create";
$name = "librarians";


$config = require('Database/config.php');

$db = new Database($config['database']);



$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
$password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';

require('Views/librarians/create.view.php');

