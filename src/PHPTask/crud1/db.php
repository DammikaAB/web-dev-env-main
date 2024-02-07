<?php
$servername = "web-dev-env-main-db-1"; // Replace with your MySQL server hostname
$username = "Web Dev";     // Replace with your MySQL username
$password = "Sasmitha@2011";     // Replace with your MySQL password
$dbname = "Web Dev";       // Replace with the name of your MySQL database

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
