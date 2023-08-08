<?php 
error_reporting(0);
include 'connection.php';
if (isset($_POST['submit'])) {

	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$gmail = $_POST['email'];
	$number = $_POST['password'];
	$phone_num = $_POST['phone_num'];


	$sql = "INSERT INTO `register` VALUES ('$firstname','$lastname','$gmail','$number','$phone_number')";

	$data=mysqli_query($con,$sql);

	if ($data) {
		echo "insert";
	}else
	{
		echo "sorry";
	}
}
?>
