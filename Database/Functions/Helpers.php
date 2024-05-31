<?php

function getDatabaseConnection() {
    $config = require('Database/config.php');
    return new Database($config['database']);
}
function insertAllRecords($table, $array)
{
    try {
        $db = getDatabaseConnection();
        $column_names = implode(',', array_keys($array));
        $placeholders = ':' . implode(', :', array_keys($array));

        $query = "INSERT INTO $table ($column_names) VALUES ($placeholders)";
        $statement = $db->prepare($query);
        foreach ($array as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
        return $statement->execute();
    } catch (Exception $e) {
        // Handle exceptions
        throw new Exception("Error updating $table: " . $e->getMessage());
    }
}
function getAllRecords($table)
{
    try {
        // Get database connection
        $db = getDatabaseConnection();

        // Prepare the query
        $query = "SELECT * FROM $table";

        // Prepare the statement
        $statement = $db->prepare($query);

        // Execute the query
        $statement->execute();

        // Fetch all records
        $records = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $records;
    } catch (Exception $e) {
        // Handle exceptions
        throw new Exception("Error fetching records: " . $e->getMessage());
    }
}

function editAllRecords($table, $id)
{
    try {
        // Get database connection
        $db = getDatabaseConnection();

        // Prepare the query with a placeholder for the ID
        $query = "SELECT name, phone, email, image_url FROM $table WHERE id = :id";

        // Prepare the statement
        $statement = $db->prepare($query);

        // Bind the ID parameter using a named placeholder
        $statement->bindValue(':id', $id, PDO::PARAM_INT);

        // Execute the query
        $statement->execute();

        // Fetch all records
        $records = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $records;
    } catch (Exception $e) {
        // Handle exceptions
        throw new Exception("Error fetching record: " . $e->getMessage());
    }
}

function deleteAllRecords($table, $id)
{
    try {
        // Get database connection
        $db = getDatabaseConnection();

        // Prepare the query with a placeholder for the ID
        $query = "DELETE FROM $table WHERE id = :id";

        // Prepare the statement
        $statement = $db->prepare($query);

        // Bind the ID parameter using a named placeholder
        $statement->bindValue(':id', $id, PDO::PARAM_INT);

        // Execute the query
        $statement->execute();

        // Return true if deletion is successful
        return true;
    } catch (Exception $e) {
        // Handle exceptions
        throw new Exception("Error deleting record: " . $e->getMessage());
    }
}

function updateAllRecords($table, $id, $array)
{
    try {
        // Get database connection
        $db = getDatabaseConnection();

        // Prepare the query with placeholders for the columns
        $columns = [];
        foreach ($array as $key => $value) {
            $columns[] = "$key = :$key";
        }
        $column_names = implode(', ', $columns);

        // Prepare the query with a placeholder for the ID
        $query = "UPDATE $table SET $column_names WHERE id = :id";

        // Prepare the statement
        $statement = $db->prepare($query);

        // Bind the parameters
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        foreach ($array as $key => $value) {
            $statement->bindValue(":$key", $value);
        }

        // Execute the query
        return $statement->execute();
    } catch (Exception $e) {
        // Handle exceptions
        throw new Exception("Error updating $table: " . $e->getMessage());
    }
}


