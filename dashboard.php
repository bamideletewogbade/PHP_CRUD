<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Page</title>
</head>
<body>
<?php 
$username = $_SESSION['username'];
echo "Welcome {$username}";
?>
</body>
</html>