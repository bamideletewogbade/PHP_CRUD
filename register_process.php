<?php
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
$pass = $_POST['password'];

$sql = "INSERT INTO user_reg (name, password)
VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
