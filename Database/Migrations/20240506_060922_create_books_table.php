<?php
require_once "../Database.php";

// Load the configuration
$config = require '../config.php';

// Create an instance of the Database class with the loaded configuration
$database = new Database($config['database']);

// Create books table
$sql = "CREATE TABLE IF NOT EXISTS books (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    description TEXT,
    cover VARCHAR(255),
    stock INT(6) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    librarian_id INT(6) UNSIGNED,
    FOREIGN KEY (librarian_id) REFERENCES librarians(id)
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