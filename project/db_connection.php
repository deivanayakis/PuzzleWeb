<?php
$servername = "localhost"; // Replace with your MySQL server name (often 'localhost')
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "puzzle"; // Replace with your MySQL database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set to UTF-8 (optional, adjust based on your needs)
$conn->set_charset("utf8");
?>