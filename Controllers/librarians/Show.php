<?php


$config         = require('Database/config.php');
$database       = new Database($config['database']);
$librarian      = new dataOperation($database);
$librarians     = $librarian->getAll('librarians');
$name           = $librarian->name = "librarians";
$sub_heading    = $librarian->sub_heading = "librarians";

$message        = new displayMessages();


require('Views/librarians/Show.view.php');