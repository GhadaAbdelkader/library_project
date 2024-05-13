<?php

require 'Validator.php';

$sub_heading = "Create";
$name = "librarians";


$config = require('Database/config.php');

$db = new Database($config['database']);


$errors = isset($_GET['errors']) ? $_GET['errors'] : [];
require('Views/librarians/create.view.php');

