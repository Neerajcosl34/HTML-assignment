<?php
// Retrieve user input from the form
if (isset($_POST['username']) && isset($_POST['email'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Set cookies to store user data
    setcookie('username', $username, time() + 3600); // Expires in 1 hour
    setcookie('email', $email, time() + (86400 * 30)); // Expires in 30 days

    // Redirect to a welcome page
    header("Location: welcome_page.php");
    exit();
}
?>
