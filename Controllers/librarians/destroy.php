<?php
$config = require('Database/config.php');
$database = new Database($config['database']);
$librarian = new dataOperation($database);
$id = $_POST['id'];

$librarians = $librarian->delete('librarians', $id);
header('Location:/librarians/show?delete');
exit();



