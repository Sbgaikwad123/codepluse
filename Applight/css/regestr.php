<?php
// Establish MySQL database connection
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "newdata";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Extract form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert data into MySQL database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>