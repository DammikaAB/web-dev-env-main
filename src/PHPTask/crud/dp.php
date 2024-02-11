<?php

// Shell.hamk.fi >>>>> localhost

$servername = "localhost"; 
$username = "dammika22000";     
$password = "2tMZIhZy";     
$dbname = "wp_dammika22000";       

// Create database connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
