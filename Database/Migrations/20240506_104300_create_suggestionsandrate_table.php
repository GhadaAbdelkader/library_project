<?php
require "../Database.php";

// Define the SQL query to create the clients table
$sql = "
CREATE TABLE SuggestionsAndRate (
    id INT AUTO_INCREMENT PRIMARY KEY,
    suggestion TEXT NOT NULL,
    rate INT NOT NULL,
    client_id INT NOT NULL,
    FOREIGN KEY (client_id) REFERENCES clients(id)
);";

try {
    // Execute the SQL query using the Database class
    $statement = $database->query($sql);

    // Check if the query was successful
    if ($statement) {
        echo "Table 'SuggestionsAndRate' created successfully";
    } else {
        echo "Error creating table: Unknown error occurred";
    }
} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}

