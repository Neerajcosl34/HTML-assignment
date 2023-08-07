<?php
session_start();
$username=$_SESSION['username'];
$time=time();
setcookie("username",$username,$time+5,'/');
if(!isset($_SESSION['Loggedin']) || $_SESSION['Loggedin']!=true) {
  header("location:log-in.php");
  exit;
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

    <title>welcome- <?php $_SESSION['username'] ?></title>
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
    <h1> You are logged in</h1>
    <div class="container">
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">welcome - <?php echo $_SESSION['username'] ?></h4>
        <p> hey how are you doing ,welcome to iSecure ,You are logged in  <?php echo $_SESSION['username'] ?>yAww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure  when you want to log out <a href="logout.php">Logout</a></p>
        <a href="../php/compprof/prof.php">your profile</a><br>
        <a href="../php/compprof/complete.php">go for profile completion</a>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
</body>
</html>