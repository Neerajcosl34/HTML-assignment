<!-- profile.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Complete Your Profile</title>
    <script>
        function calculateProfileCompletion() {
            // Replace these values with the actual number of required fields and total fields in your form
            const requiredFields = 5;
            const totalFields = 8;
            
            const completedFields = /* Calculate the number of completed fields */;
            const percentage = (completedFields / totalFields) * 100;
            document.getElementById("completionPercentage").innerText = `Profile Completion: ${percentage}%`;
        }
    </script>
</head>
<body>
    <?php require '../php/partials/_nav.php'?>
    <h1>Complete Your Profile</h1>
    <!-- Your profile completion form here -->
    <form action="../php/compprof/process_profile.php" method="post">
        <!-- Your form fields go here -->
       NAME <input type="text"id ="name"name="name"/>
       PROFESSION <input type="text"id="profession"name="profession">
    </form>
    
    <button onclick="calculateProfileCompletion()">Update Profile</button>
    <p id="completionPercentage"></p>
</body>
</html>
