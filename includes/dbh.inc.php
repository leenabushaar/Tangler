<?php

$servername = "localhost";
$dBEmail="root";
$dbPassword="";
$dbName="tangler_users";

$conn =  mysqli_connect($servername, $dBEmail, $dbPassword, $dbName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
