
<?php

if (isset($_POST['searchByName'])){

    require 'dbh.inc.php';

    $name=strtolower($_POST['nameSearch']);

    $sql= "SELECT * FROM users WHERE CONCAT(userFname, ' ', userLname) LIKE '%$name%' OR userFname LIKE '%$name%' OR userLname LIKE '%$name%'");

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


        echo "Name: " . $row["userFname"].  $row["userLname"]."<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();


}

else {

  header("Location: ../search.php");
  exit();

}
