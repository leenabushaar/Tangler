<link
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
    header("Location: ../signup.php?error=invalidemail");
    exit();
  }


  elseif (!preg_match("/^[a-zA-Z]{3}\d{8}@std\.psut\.edu\.jo$/",$email)) {
    $emailErr = "This must be a valid student email.";
    //displayError($emailErr);
    header("Location: ../signup.php?error=invalidemail");
    exit();
  }

  elseif (!preg_match("/^[a-zA-Z]*$/",$firstName)) {
    $fnameErr = "First name can only contain letters.";
    //displayError($fnameErr);
    header("Location: ../signup.php?error=invalidfirstname");
    exit();
  }

  elseif (!preg_match("/^[a-z A-Z]*$/",$lastName)) {
    $lnameErr = "Last name can only contain letters and spaces.";
    //displayError($lnameErr);
    header("Location: ../signup.php?error=invalidlastname");
    exit();
  }

  elseif ($password!==$passwordRepeat){
    header("Location: ../signup.php?error=passwordCheck&ufname=".$firstName."&ulname=".$lastName."&uemail=".$email);
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

        mysqli_stmt_bind_param($stmt, "s", $firstName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck=mysqli_stmt_num_rows($stmt);

        if($resultCheck>0){
          header("Location: ../signup.php?error=emailexistsalready&ufname=".$firstName."&ulname=".$lastName);
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
            header("Location: ../signup.php?signup=success");
            exit();

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
