<?php

// Localhost:81 

$servername = "web-dev-env-main-db-1"; 
$username = "Web Dev";     
$password = "Sasmitha@2011";     
$dbname = "Web Dev";       

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
