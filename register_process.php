<!DOCTYPE html>
<html>
<head>
	<title>Register Process Page</title>
</head>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zuriauth";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$user = $_POST['username'];
$pass = md5($_POST['password']);

$sql = "INSERT INTO user_reg (name, password)
VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br>
<hr>
<h5>Proceed to login page? <bold><a style="color: blue" href="login.php">Login</a></bold></h5>
</body>
</html>

