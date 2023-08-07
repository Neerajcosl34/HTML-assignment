
<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST") {
if(isset($_COOKIE['username']))
{ echo "jjjjjjj";
  $_SESSION['Loggedin']=true;
  $_SESSION['username']=$username;
  header("location:welcome.php");
  exit();
}





  include 'partials/_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
//   $cpassword = $_POST["cpassword"];
  $sql= "Select * from neeraj where username='$username' AND cpassword='$password'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  if ($num==1)
  {

    $login=true;
    session_start();
    $_SESSION['Loggedin']=true;
    $_SESSION['username']=$username;
    header("location:welcome.php");
  }

  else
  {
    $showError="Invalid credentials";
  }

}
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>login</title>
  </head>
  <body>    
    <?php require 'partials/_nav.php'?>
    <?php
    if($login){
    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>success</strong> you are logged in
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>'; 
    }
    if($showError){
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>error/strong> '. $showError.'
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>'; 
    }
    ?> 
    <div class="div-container">
      <h1>login to our website</h1>
      <form action="log-in.php"method="post">
        <div class="form-group col-md-6">
          <label for="username">  Username</label>
          <input type="text" class="form-control" id="username"name="username" aria-describedby="emailHelp" placeholder="Enter username">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group col-md-6">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password"name="password" placeholder="Password">
        </div>
        <input type="checkbox"name="ch"value="ch">remember me my username and passwod</input>
        <button type="submit" class="btn btn-primary">login</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>