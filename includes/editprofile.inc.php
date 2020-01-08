<?php

  require 'dbh.inc.php';

  $fname=$_POST['p-fname'];
  $lname=$_POST['p-lname'];
  $status=$_POST['status'];
  $degree=$_POST['p-degree'];
  $year=$_POST['p-year'];


  $sql="UPDATE users SET fnameUsers=?, lnameUsers=?, statusUsers=?, degreeUsers=?, yearUsers=? WHERE idUsers=?";
  $stmt=mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: ../profile.php?error=sqlerror");
    exit();
  }

  else{

    mysqli_stmt_bind_param($stmt, "ssssss", $fname, $lname, $status, $degree, $year, $_SESSION['userId']);
    mysqli_stmt_execute($stmt);
    header("Location: ../profile.php");
    exit();

  }


    mysqli_stmt_close($stmt);
    mysqli_close($conn);
