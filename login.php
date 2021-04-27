<?php 
include("config.php");
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
<h1 style="text-align: center"><span style="color: #1DA1F2">Login with your username</span></h1>
<hr>
<br>
<form action="login_process.php" method="post" style="text-align: center;" autocomplete="off">
  <div class="container">
    
    <input type="text" placeholder="Enter Username" name="username" required autocomplete="off">

    
    <input type="password" placeholder="Enter Password" name="password" required autocomplete="off">

    <button style="width: 50%" type="submit" name="submit" class="registerbtn">Login</button>
    <br>
  </div>
<hr>
  <div class="container" style="background-color:#f1f1f1">
    Forgot Password? <span class="psw"><a href="reset_password.php">Click to reset password</a></span>
  </div>
  <hr>
  <div class="container" style="background-color:#f1f1f1">
    Not registered yet? <span class="psw"><a href="register.php">Register Here</a></span>
  </div>
</form>
</body>
</html>