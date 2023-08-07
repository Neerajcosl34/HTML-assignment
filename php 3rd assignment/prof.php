<?php
// Sample user profile data (you can customize this based on your requirements)
$userProfile = array(
    'name' => '',
    'email' => 'neeraj@gmail.com',
    'username' => 'neeraj123',
    'bio' => '',
    'location' => 'KATNI',
    'website' => 'https://example.com',
    'avatar' => ''
);

// Function to calculate the profile completion percentage
function calculateProfileCompletionform($profileData) {
    $totalFields = count($profileData);
    $completedFields = 0;

    foreach ($profileData as $field) {
        if (!empty($field)) {
            $completedFields++;
        }
    }

    // Calculate the completion percentage
    $percentage = ($completedFields / $totalFields) * 100;
    return $percentage;
}

// Get the profile completion percentage
$profileCompletionPercentage = calculateProfileCompletion($userProfile);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Completion</title>
</head>
<body>
    <h1>Profile Completion Percentage: <?php echo $profileCompletionPercentage; ?>%</h1>
    <h2>User Profile</h2>
    <ul>
        <li>Name: <?php echo $userProfile['name']; ?></li>
        <li>Email: <?php echo $userProfile['email']; ?></li>
        <li>Username: <?php echo $userProfile['username']; ?></li>
        <li>Bio: <?php echo $userProfile['bio']; ?></li>
        <li>Location: <?php echo $userProfile['location']; ?></li>
        <li>Website: <?php echo $userProfile['website']; ?></li>
        <li>Avatar: <?php echo $userProfile['avatar']; ?></li>
    </ul>
</body>
</html>















<?php
$userProfile = array(
    'name' => '',
    'email' => '',
    'username' => '',
    'bio' => '',
    'location' => '',
    'website' => '',
    'avatar' => ''
);

function calculateProfileCompletion($profileData) {
    $totalFields = count($profileData);
    $completedFields = 0;

    foreach ($profileData as $field) {
        if (!empty($field)) {
            $completedFields++;
        }
    }

    // Calculate the completion percentage
    $percentage = ($completedFields / $totalFields) * 100;
    return $percentage;
}

// Get the profile completion percentage
$profileCompletionPercentage = calculateProfileCompletion($userProfile);
?>
<?php
// Check if the form is submitted and update the user profile data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userProfile['name'] = $_POST['name'];
    $userProfile['email'] = $_POST['email'];
    $userProfile['username'] = $_POST['username'];
    $userProfile['bio'] = $_POST['bio'];
    $userProfile['location'] = $_POST['location'];
    $userProfile['website'] = $_POST['website']; 

    // You can process the uploaded avatar file here if needed
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Complete Your Profile</title>
</head>
<body>
    <h1>Complete Your Profile</h1>
    <h1>Profile Completion Percentage: <?php echo $profileCompletionPercentage; ?>%</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $userProfile['name']; ?>"><br><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $userProfile['email']; ?>"><br><br><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $userProfile['username']; ?>"><br><br><br><br>

        <label for="bio">Bio:</label>
        <textarea name="bio"><?php echo $userProfile['bio']; ?></textarea><br><br><br><br>

        <label for="location">Location:</label>
        <input type="text" name="location" value="<?php echo $userProfile['location']; ?>"><br><br><br><br>

        <label for="website">Website:</label>
        <input type="url" name="website" value="<?php echo $userProfile['website']; ?>"><br><br><br><br>

        <label for="avatar">Avatar:</label>
        <input type="file" name="avatar"><br>

        <input type="submit" value="Update Profile">
    </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h2>Updated Profile Data:</h2>";
    echo "<p>Name: " . $userProfile['name'] . "</p>";
    echo "<p>Email: " . $userProfile['email'] . "</p>";
    echo "<p>Username: " . $userProfile['username'] . "</p>";
    echo "<p>Bio: " . $userProfile['bio'] . "</p>";
    echo "<p>Location: " . $userProfile['location'] . "</p>";
    echo "<p>Website: " . $userProfile['website'] . "</p>";

}
?>
