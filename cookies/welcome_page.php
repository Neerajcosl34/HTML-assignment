<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
    <?php
    // Retrieve and display user data from cookies
    if (isset($_COOKIE['username']) && isset($_COOKIE['email'])) {
        $username = $_COOKIE['username'];
        $email = $_COOKIE['email'];

        echo "<h1>Welcome, $username!</h1>";
        echo "<p>Your email is: $email</p>";
    } else {
        echo "<h1>Welcome Guest!</h1>";
        echo "<p>Please fill out the form on the homepage.</p>";
    }
    ?>
</body>
</html>
