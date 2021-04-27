<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
	<h1 style="text-align: center; color:"#1DA1F2">Password Reset</h1>
<hr>
<br>
<form action="reset_process.php" method="post" style="text-align: center;" autocomplete="off">
  <div class="container">
    <input type="text" placeholder="Enter new password" name="password" required autocomplete="off">
    <br>
    <input type="password" placeholder="Confirm new Password" name="c_password" required autocomplete="off">
    <br>
    <input type="submit" name="submit" value="Submit">
    <br>
  </div>
<hr>
  </form>
</body>
</html>