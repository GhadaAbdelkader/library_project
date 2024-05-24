<?php
require_once "../Database.php";

// Load the configuration
$config = require '../config.php';

// Create an instance of the Database class with the loaded configuration
$database = new Database($config['database']);

// Define the SQL query to create the clients table
$sql = "
CREATE TABLE IF NOT EXISTS clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone VARCHAR(15) NOT NULL,
    name VARCHAR(100) NOT NULL,
    national_id VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address VARCHAR(255),
    password VARCHAR(255) NOT NULL
)";

try {
    // Execute the SQL query using the Database class
    $statement = $database->query($sql);

    // Check if the query was successful
    if ($statement) {
        echo "Table 'clients' created successfully";
    } else {
        echo "Error creating table: Unknown error occurred";
    }
} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}

