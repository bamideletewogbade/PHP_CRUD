<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
	<h1 style="text-align: center; color:#02393E">Password reset</h1>
<hr>
<br>
<form action="login_process.php" method="post" style="text-align: center;" autocomplete="off">
  <div class="container">
    
    <input type="text" placeholder="Enter new password" name="password" required autocomplete="off">

    
    <input type="password" placeholder="Confirm new Password" name="c_password" required autocomplete="off">

    <button style="width: 50%" type="submit" name="submit" class="registerbtn">Submit</button>
    <br>
  </div>
<hr>
  </form>
</body>
</html>