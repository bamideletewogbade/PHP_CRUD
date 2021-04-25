<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
<h1 style="text-align: center; color:#02393E">Login with your username</h1>
<hr>
<br>
<form action="login_process.php" method="post" style="text-align: center;" autocomplete="off">
  <div class="container">
    
    <input type="text" placeholder="Enter Username" name="username" required autocomplete="off">

    
    <input type="password" placeholder="Enter Password" name="password" required autocomplete="off">

    <button style="width: 50%" type="submit" name="submit" class="registerbtn">Login</button>
    <br>
    <label>
      <input style ="text-align: center;" type="checkbox" name="remember"> Remember me
    </label>
  </div>
<hr>
  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="reset_password.php">password?</a></span>
  </div>
</form>
</body>
</html>