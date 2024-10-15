<?php
include 'db_connect.php';  // This includes the connection file

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];  // Replace 'name' with your actual input fields
    $email = $_POST['email'];
    
    // SQL query to insert data into the database
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";  // Replace 'users' with your actual table name
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();  // Close the connection
}
?>
