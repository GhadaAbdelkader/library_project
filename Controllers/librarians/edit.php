<?php
require 'Validator.php';

$sub_heading = "Edit";

$name = "librarians";

$admins = editAllRecords('librarians');

$errors = isset($_GET['errors']) ? $_GET['errors'] : [];

require('Views/librarians/edit.view.php');

