<?php

$id = $_POST['id'];
deleteAllRecords('librarians', $id);

header('Location:/librarians/show?delete');
exit();



