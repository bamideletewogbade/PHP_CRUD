<!DOCTYPE html>
<html>
<head>
	<title>Logout Page</title>
</head>
<body>
<?php
session_start();
unset($_SESSION['id']);
session_destroy();
header('Location:login.php');
?>
</body>
</html>