<?php
   include("config.php");
   session_start();
   
   if(isset($_POST['submit'])) {
      // username and password sent from form 
      
     $username = $_POST['username'];
     $password = $_POST['password'];

     if (empty($username || empty($password))) {
         header("Location:login.php?error=emptyFields");
         exit();
     }else{
        $sql = "SELECT * FROM user_reg WHERE name = ? AND password = ?;";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            
        }else{
            mysqli_stmt_bind_param($stmt,"ss",$username,$password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['password']);
                if ($pwdCheck == false) {
                     header("Location:signup.php?error=wrongPassword");
                 }elseif ($pwdCheck == true) {
                     
                     $_SESSION['username'] = $row['name'];
                     $_SESSION['password'] = $row['password'];
                     header("Location: dashboard.php?login=success");
                     exit();
                 } 
            }else{
                header("Location:signup.php?error=noUser");
            }
        }
     }
   }
?>