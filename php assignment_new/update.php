6.Create update.php file

create a update.php file on your computer and include your connection.php file also.

<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>

<form action="" method="get">
	<input type="text" name="firstname" placeholder="firstname" value="<?php echo $_GET['first_name']; ?>"><br><br>
	<input type="text" name="lastname" placeholder="lastname" value="<?php echo $_GET['last_name']; ?>" ><br><br>
	<input type="gmail" name="gmail" placeholder="email" value="<?php echo $_GET['gmail']; ?>"><br><br>
	<input type="text" name="password" placeholder="password" value="<?php echo $_GET['password']; ?>"><br><br>
	<input type="text" name="phone_num" placeholder="phone_number" value="<?php echo $_GET['phone_num']; ?>"><br><br>
	<input type="submit" name="submit" value="update">
	
</form>

<?php 
include ('connection.php');
if ($_GET['submit'])
{

	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$gmail = $_GET['gmail'];
	$number = $_GET['password'];
	$phone_num = $_GET['address'];



 	$sql="UPDATE reg SET firstname='$firstname' , lastname='$lastname', gmail='$gmail' , number='$number', address='$address'   WHERE id='$id'";
 	
 	$data=mysqli_query($con, $sql);
   	
 	if ($data) {
 		//echo "record update";
 		header('location:show.php');
 	}
 	else{
 		echo "not update";
 	}
}
else
{
	echo "click on  button to save the change";
}
?>

</body>
</html>