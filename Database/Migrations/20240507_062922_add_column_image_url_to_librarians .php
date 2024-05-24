<?php
require_once "../Database.php";

// Load the configuration
$config = require '../config.php';

// Create an instance of the Database class with the loaded configuration
$database = new Database($config['database']);

// Create books table
$sql = "ALTER TABLE librarians ADD COLUMN image_url VARCHAR(255) NULL";



try {
    // Execute the SQL query using the Database class
    $statement = $database->query($sql);

    // Check if the query was successful
    if ($statement) {
        echo "Table 'librarians' created successfully";
    } else {
        echo "Error creating table: Unknown error occurred";
    }
} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}
