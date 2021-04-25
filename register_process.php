<?php session_start(); 
$con = mysqli_connect('localhost','root','','zuriauth');



$name = $_POST['username'];
$password = $_POST['password'];

$sql ="SELECT * FROM user_reg WHERE username ='$name'";
$result = mysqli_query($con,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
    echo "Please select a different username";
}
else{
    $reg = "INSERT INTO users_reg(username , password) VALUES ('$name' , '$password')";
    mysqli_query($con,$reg);
    echo "Registration Successful";
   
}
echo "Registration Successful";
 header("location:login.php");
?>