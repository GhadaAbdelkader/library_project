<?php
require "../Database.php";

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
