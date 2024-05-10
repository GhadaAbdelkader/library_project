<?php
require "../Database.php";

// Define the SQL query to create the clients table
$sql = "
CREATE TABLE client_book (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT UNSIGNED NOT NULL,
    client_id INT NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    CONSTRAINT fk_book_id FOREIGN KEY (book_id) REFERENCES books (id),
    CONSTRAINT fk_client_id FOREIGN KEY (client_id) REFERENCES clients (id)
);";

try {
    // Execute the SQL query using the Database class
    $statement = $database->query($sql);

    // Check if the query was successful
    if ($statement) {
        echo "Table 'client_book' created successfully";
    } else {
        echo "Error creating table: Unknown error occurred";
    }
} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}

