<?php

require 'Validator.php';


$config         = require('Database/config.php');
$database       = new Database($config['database']);
$librarian      = new dataOperation($database);
$name           = $librarian->name = "librarians";
$sub_heading    = $librarian->sub_heading = "Create";
$errors         = $librarian-> errors =  isset($_GET['errors']) ? $_GET['errors'] : [];

$message        = new displayMessages();

require('Views/librarians/create.view.php');

