<?php
require 'Validator.php';


$config         = require('Database/config.php');
$database       = new Database($config['database']);
$librarian      = new dataOperation($database);
$id             = $librarian-> id = $_GET['id'];
$librarians     = $librarian->edit('librarians', $id);
$name           = $librarian->name = "librarians";
$sub_heading    = $librarian->sub_heading = "Edit";
$errors         = $librarian-> errors =  isset($_GET['errors']) ? $_GET['errors'] : [];

require('Views/librarians/edit.view.php');



