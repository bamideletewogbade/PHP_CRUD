<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
<h1 style="text-align: center;">👋 Hello, Welcome to the Zuri Basic Authentification Page</h1>
<br>
<form action="register_process.php" style="text-align: center;">
  <div class="container">
    <h1 style="text-align: center;">Register</h1>
    <p style="text-align: center;">Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required autocomplete="off">
    <br>
    <br>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required autocomplete="off">
    <br>
    <br>
    <label for="password-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password-repeat" id="password-repeat" required autocomplete="off">
    <hr>

    <p style="text-align: center;">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p style="text-align: center;">Already have an account? <a style = "color:#46A049" href="#">Sign in</a>.</p>
  </div>
</form>
</body>
</html>