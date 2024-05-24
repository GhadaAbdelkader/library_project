<?php

function getDatabaseConnection() {
    $config = require('Database/config.php');
    return new Database($config['database']);
}

function getAllRecords($table)
{
    try {
        // Get database connection
        $db = getDatabaseConnection();
        // Prepare the query with a placeholder for the ID
        $query = "select * from $table";
        // Execute the query with the parameters and fetch all records
        $statement = $db->query($query);
        return $statement->fetchAll();
    } catch (Exception $e) {
        // Handle exceptions
        throw new Exception("Error fetching record: " . $e->getMessage());
    }
}
function editAllRecords($table)
{
    try {
        // Get database connection
        $db = getDatabaseConnection();

        // Prepare the query with a placeholder for the ID
        $query = "SELECT name, phone, email, image_url FROM $table WHERE id = :id";

        // Bind the ID parameter using a named placeholder
        $params = [':id' => $_GET['id']];

        // Execute the query with the parameters and fetch all records
        $statement = $db->query($query, $params);
        return $statement->fetchAll();
    } catch (Exception $e) {
        // Handle exceptions
        throw new Exception("Error fetching record: " . $e->getMessage());
    }
}



function deleteAllRecords($table)
{
    try {
        // Get database connection
        $db = getDatabaseConnection();

        // Prepare the query with a placeholder for the ID
        $query = "delete from $table where id = :id";

        // Bind the ID parameter using a named placeholder
        $params = ['id' => $_POST['id']];

        // Execute the query with the parameters and fetch all records
        $statement = $db->query($query, $params);
        return $statement->fetchAll();
    } catch (Exception $e) {
        // Handle exceptions
        throw new Exception("Error fetching record: " . $e->getMessage());
    }
}

function updateAllRecords($table, $id, $name, $email, $phone, $image_url)
{
    try {
        $db = getDatabaseConnection();

        $query = "UPDATE $table SET name = :name, email = :email, phone = :phone, image_url = :image_url WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->bindValue(':name', $name, PDO::PARAM_STR);
        $statement->bindValue(':email', $email, PDO::PARAM_STR);
        $statement->bindValue(':phone', $phone, PDO::PARAM_STR);
        $statement->bindValue(':image_url', $image_url, PDO::PARAM_STR);

        return $statement->execute();
    } catch (Exception $e) {
        // Handle exceptions
        throw new Exception("Error updating $table: " . $e->getMessage());
    }
}


//function insertAllRecords($table, $image_url)
//{
//    $db = getDatabaseConnection();
//    return   $db->query('INSERT INTO librarians (name, email, phone, password, image_url) VALUES
//    (:name, :email, :phone, :password, :image_url)', [
//        'name' => $_POST['name'],
//        'email' => $_POST['email'],
//        'phone' => $_POST['phone'],
//        'password' => $_POST['password'],
//        'image_url' => $image_url
//    ]);
//}
function insertAllRecords($table, $name, $email, $phone,$password, $image_url)
{
    try {
        $db = getDatabaseConnection();

        $query = "INSERT INTO $table SET name = :name, email = :email, phone = :phone, password = :password, image_url = :image_url ";
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name, PDO::PARAM_STR);
        $statement->bindValue(':email', $email, PDO::PARAM_STR);
        $statement->bindValue(':phone', $phone, PDO::PARAM_STR);
        $statement->bindValue(':password', $password, PDO::PARAM_INT);
        $statement->bindValue(':image_url', $image_url, PDO::PARAM_STR);

        return $statement->execute();
    } catch (Exception $e) {
        // Handle exceptions
        throw new Exception("Error updating $table: " . $e->getMessage());
    }
}