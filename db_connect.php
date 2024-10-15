<?php
$servername = "localhost";  // If Hostinger provides a specific hostname, use that instead.
$username = "Joebert";  
$password = "joebert12345";  
$dbname = "edoc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
