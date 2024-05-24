<?php
require_once "../Database.php";

// Load the configuration
$config = require '../config.php';

// Create an instance of the Database class with the loaded configuration
$database = new Database($config['database']);

// Create books table
$sql = "CREATE TABLE IF NOT EXISTS librarians (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    password VARCHAR(255) NOT NULL
    
)";


try {
    // Execute the SQL query using the Database class
    $statement = $database->query($sql);

    // Check if the query was successful
    if ($statement) {
        echo "Table 'books' created successfully";
    } else {
        echo "Error creating table: Unknown error occurred";
    }
} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}