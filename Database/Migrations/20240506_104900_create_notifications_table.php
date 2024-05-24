<?php
require_once "../Database.php";

// Load the configuration
$config = require '../config.php';

// Create an instance of the Database class with the loaded configuration
$database = new Database($config['database']);

$sql = "
CREATE TABLE Notifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    message TEXT,
    librarian_id INT(6) UNSIGNED,
    client_id INT,
    FOREIGN KEY (librarian_id) REFERENCES Librarians(id),
    FOREIGN KEY (client_id) REFERENCES clients(id)
);
";

try {
    // Execute the SQL query using the Database class
    $statement = $database->query($sql);

    // Check if the query was successful
    if ($statement) {
        echo "Table 'Notifications' created successfully";
    } else {
        echo "Error creating table: Unknown error occurred";
    }
} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}

