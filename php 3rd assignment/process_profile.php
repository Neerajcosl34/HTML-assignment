<?php
// process_form.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Add other profile fields here

    // Save the data to the database (assuming you have established a database connection)
    $servername = "localhost";
    $username = "root";
    $password = "Admin@1234";
    $dbname = "User";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL statement to insert data into the table
    $stmt = $conn->prepare("INSERT INTO user_profiles (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Profile data saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
