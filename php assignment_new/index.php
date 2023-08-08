<!DOCTYPE html>
<html>
<head>
	<title>Form with mysql</title>
</head>
<body>
<div class="row text-center">
	<div class="container">
		<h1>Registration Form</h1>
	<form action="" method="post">
	<input type="text" name="first_name" placeholder="firstname"><br><br>
	<input type="text" name="last_name" placeholder="lastname"><br><br>
	<input type="gmail" name="email" placeholder="gmail"><br><br>
	<input type="text" name="password" placeholder="password"><br><br>
	<input type="text" name="phone_num" placeholder="phone Number"><br><br>
	<input type="submit" name="submit" value="insert"><br><br>
	</form>
<button><a href="show.php">show data</a></button>
	</div>
</div>
</body>
</html>
<?php 
include 'connection.php';
if (isset($_POST['submit'])) {
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$gmail = $_POST['email'];
	$number = $_POST['password'];
	$phone_num = $_POST['phone_num'];

    if (empty($_POST["first_name"])) {  
        $errMsg = "Error! You didn't enter the Name.";  
                 echo $errMsg;  
    } else {  
        $name = $_POST["first_name"];  
    }  

	$sql = "INSERT INTO `register` VALUES ('$firstname','$lastname','$gmail','$number','$phone_num')";
	$data=mysqli_query($conn,$sql);
    echo 'inset in';
	if ($data) {
		echo "insert";
	}else
	{
		echo "sorry";
	}
}
?>




