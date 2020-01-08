<?php

  session_start();

  if(!isset($_SESSION['userId'])){
      header("Location: login.php");
      die();
  }

  require 'dbh.inc.php';

  $uid=$_SESSION['userId'];
  $fname=$_POST['p-fname'];
  $lname=$_POST['p-lname'];
  if(isset($_POST['status'])){
  $statusArr=$_POST['status'];
  foreach($statusArr as $val)
  if(isset($val))
  $status=$val;
  }
  else $status=$_SESSION['userStatus'];
  $degree=$_POST['p-degree'];
  $year=$_POST['p-year'];

  $sql = "UPDATE users SET fnameUsers='$fname', lnameUsers='$lname', statusUsers='$status', degreeUsers='$degree', yearUsers='$year'  WHERE idUsers='$uid'";

  if(mysqli_query($conn, $sql)){
    header("Location: ../profile.php?editprofile=success");
    mysqli_close($conn);

    if($fname!=$_SESSION['userFname'])
    $_SESSION['userFname']= $fname;

    if($lname!=$_SESSION['userLname'])
    $_SESSION['userLname']= $lname;

    if($status!=$_SESSION['userStatus'])
    $_SESSION['userStatus']= $status;

    if($degree!=$_SESSION['userDegree'])
    $_SESSION['userDegree']= $degree;

    if($year!=$_SESSION['userYear'])
    $_SESSION['userYear']= $year;



    }

    else {
    header("Location: ../profile.php?error=sqlerror");
  }
