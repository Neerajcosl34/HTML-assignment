<?php
$servername = "localhost";
$username = "root";
$password = "Admin@1234";
$db = 'registration';

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
