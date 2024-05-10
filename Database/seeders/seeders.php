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

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error . "\n";
}

// Select the newly created database
$conn->select_db($database);

// Create admin table
$sql = "CREATE TABLE IF NOT EXISTS librarians (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    password VARCHAR(255) NOT NULL
    
)";
if ($conn->query($sql) === TRUE) {
    echo "Table librarians created successfully\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

// Insert default admin data
$name = "Admin";
$email = "admin@example.com";
$phone = "123456789";
$password = password_hash("password123", PASSWORD_DEFAULT);

$sql = "INSERT INTO librarians (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Default admin data inserted successfully\n";
} else {
    echo "Error inserting data: " . $conn->error . "\n";
}

// Close connection
$conn->close();

