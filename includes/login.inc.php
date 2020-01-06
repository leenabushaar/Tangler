<?php

if (isset($_POST['login-submit'])){

  require 'dbh.inc.php';

  $email=$_POST['uemail'];
  $password=$_POST['upass'];

  if (empty($email)||empty($password)) {
    header("Location: ../login.php?error=emptyfields&uemail=".$email);
    exit();
  }

  else {
    $sql="SELECT * FROM users WHERE emailUsers=?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location: ../login.php?error=sqlerror");
      exit();
    }
    else{

      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      $result=mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)){
        $pwdCheck=password_verify($password,$row['pwdUsers']);
        if($pwdCheck==false){
          header("Location: ../login.php?error=wrongpassword&uemail=".$email);
          exit();
        }
        elseif($pwdCheck==true){
          session_start();
          $_SESSION['userId']=$row['idUsers'];
          $_SESSION['userFname']= $row['fnameUsers'];
          $_SESSION['userLname']= $row['lnameUsers'];


          header("Location: ../index.php?login=success");
          exit();
        }
        else{
          header("Location: ../login.php?error=wrongpassword&uemail=".$email);
          exit();
        }
      }
      else{
        header("Location: ../login.php?error=nouser&uemail=".$email);
        exit();
      }
    }

  }

}

else{
    header("Location: ../login.php");
    exit();
}
