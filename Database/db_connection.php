<?php

// Database connection settings
$servername = "localhost";
$username = "root";
$database = "library2";

// Create connection
$conn = new mysqli($servername, $username);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Select the newly created database
$conn->select_db($database);


