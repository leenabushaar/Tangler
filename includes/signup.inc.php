
<?php

if (isset($_POST['signup-submit'])){

  require 'dbh.inc.php';

  $firstName=$_POST['ufname'];
  $lastName=$_POST['ulname'];
  $email=$_POST['uemail'];
  $password=$_POST['upass'];
  $passwordRepeat=$_POST['repeatpass'];

  if (empty($email)||empty($password)||empty($passwordRepeat)||empty($firstName)||empty($lastName)) {
    header("Location: ../signup.php?error=emptyfields&ufname=".$firstName."&ulname=".$lastName."&uemail=".$email);
    exit();
  }

  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../signup.php?error=invalidemail&ufname=".$firstName."&ulname=".$lastName."&uemail=".$email);
    exit();
  }


  elseif (!preg_match("/^[a-zA-Z]{3}\d{8}@std\.psut\.edu\.jo$/",$email)) {
    $emailErr = "This must be a valid student email.";
    //displayError($emailErr);
    header("Location: ../signup.php?error=invalidemail&ufname=".$firstName."&ulname=".$lastName."&uemail=".$email);
    exit();
  }

  elseif (!preg_match("/^[a-zA-Z]*$/",$firstName)) {
    header("Location: ../signup.php?error=invalidfirstname&ufname=".$firstName."&ulname=".$lastName."&uemail=".$email);
    exit();
  }

  elseif (!preg_match("/^[a-z A-Z]*$/",$lastName)) {
    $lnameErr = "Last name can only contain letters and spaces.";
    //displayError($lnameErr);
    header("Location: ../signup.php?error=invalidlastname&ufname=".$firstName."&ulname=".$lastName."&uemail=".$email);
    exit();
  }

  elseif ($password!==$passwordRepeat){
    header("Location: ../signup.php?error=passwordcheck&ufname=".$firstName."&ulname=".$lastName."&uemail=".$email);
    exit();
  }

  else{

    $sql="SELECT emailUsers FROM users WHERE emailUsers=?";
    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../signup.php?error=sqlerror");
      exit();
    }

    else {

        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck=mysqli_stmt_num_rows($stmt);

        if($resultCheck>0){
          header("Location: ../signup.php?error=emailexistsalready&ufname=".$firstName."&ulname=".$lastName."&uemail=".$email);
          exit();
        }

        else{

          $sql="INSERT INTO users (fnameUsers, lnameUsers, emailUsers, pwdUsers) VALUES (?,?,?,?)";
          $stmt=mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlerror");
            exit();
          }

          else{

            $hashedPwd=password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $email, $hashedPwd);
            mysqli_stmt_execute($stmt);

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
                  $_SESSION['userStatus']=$row['statusUsers'];
                  $_SESSION['userDegree']=$row['degreeUsers'];
                  $_SESSION['userYear']=$row['yearUsers'];

                  header("Location: ../index.php?login=success&signup=success");
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

    }

  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}

else {

  header("Location: ../signup.php");
  exit();

}
