<?php
require 'Validator.php';

$sub_heading = "Edit";

$name = "librarians";
$id = $_GET['id'];

$admins = editAllRecords('librarians', $id);

$errors = isset($_GET['errors']) ? $_GET['errors'] : [];

require('Views/librarians/edit.view.php');

