<?php


$sub_heading = "librarians";
$name = "librarians";


$config = require('Database/config.php');

$db = new Database($config['database']);





    $query = "select * from librarians";

    $admins = $db->query($query)->fetchAll();



require('Views/librarians/Show.view.php');