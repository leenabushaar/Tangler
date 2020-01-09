<?php
 session_start();
 if(!isset($_SESSION['userId'])){
     header("Location: login.php");
     die();
 }

 require 'includes/dbh.inc.php';

?>

<!doctype html>
<html lang="en">

  <head>
    <title>Tangler &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">


    <style>
         .btn-primary{
      background-color: transparent;
      color:#5f9eadbf;
      border-color: #5f9eadbf;
    }

    .btn-primary:hover{
      background-color: #5f9eadbf;
      color:white;
      border-color: #5f9eadbf;
    }

    .btn-primary:active{
      background-color: #3d6f7be6 !important;
      color:white !important;
      border-color: #3d6f7be6 !important;
      box-shadow: 1px 1px 1px 1px #3d6f7be6 !important;
    }


    html {
      scroll-behavior: smooth;
    }

  .log-button{
    border: none;
    margin-right: 0px;
    width: auto;
  }

    </style>

    <script>

    function Filter(){

      var name=document.getElementById("nameSearch").value.toLowerCase();
      var users=document.getElementsByClassName("usernameresult");
      var usersdiv=document.getElementsByClassName("userresult");

      var userstatus=document.getElementsByClassName("userstatusresult");
      var userdegree=document.getElementsByClassName("userdegreeresult");

      var checkedStatus=document.querySelectorAll(":checked")[0].value;
      var degree=document.querySelectorAll(":checked")[1].value;


            for(i=0; i<usersdiv.length; i++){
              if(((users[i].innerHTML.toLowerCase()==name)||(name==""))&&(userstatus[i].innerHTML==checkedStatus)&&(userdegree[i].innerHTML==degree))
              usersdiv[i].style.display="block";
              else usersdiv[i].style.display="none";
            }






    }


              function handleChange(){

                var checkedStatus=document.querySelectorAll(":checked")[0].value;
                title=document.getElementById('studyTitle');
                options=document.getElementById('studyOptions');


                if(checkedStatus=="undergrad"){
                  title.innerHTML="Major:";
                  options.innerHTML="<select name='p-degree' required><option value=\"\" readonly>Please Choose Major</option><optgroup label=\"King Hussein School of Computing Sciences\"><option value=\"Computer Science\">Computer Science</option><option value=\"Computer Graphics and Animation\">Computer Graphics and Animation</option><option value=\"Software Engineering\">Software Engineering</option></optgroup><optgroup label=\"King Abdullah II School of Engineering\"><option value=\"Electronics Engineering\">Electronics Engineering</option><option value=\"Computer Engineering\">Computer Engineering</option><option value=\"Communications Engineering\">Communications Engineering</option><option value=\"Electrical Power and Energy Engineering\">Electrical Power and Energy Engineering</option><option value=\"Networks and Information Security Engineering\">Networks and Information Security Engineering</option></optgroup><optgroup label=\"King Talal School of Business Technology\"><option value=\"Business Administration\">Business Administration</option><option value=\"Accounting\">Accounting</option><option value=\"E-Marketing and Social Media\">E-Marketing and Social Media</option><option value=\"Business Information Technology\">Business Information Technology</option></optgroup></select>";
                  document.getElementById('year-row').style.display='block';
                }

                else if(checkedStatus=="grad"){
                  title.innerHTML="Program:";
                  options.innerHTML="<select name='p-degree' required><option value=\"\" readonly>Please Choose Program</option><optgroup label=\"King Abdullah I School of Graduate Studies and Scientific Research\"><option value=\"Computer Science\">Computer Science</option><option value=\"Data Science\">Data Science</option><option value=\"IT Security and Digital Criminology\">IT Security and Digital Criminology</option><option value=\"Intelligent Systems and Computer Engineering\">Intelligent Systems and Computer Engineering</option><option value=\"Electrical Engineering\">Electrical Engineering</option><option value=\"Enterprise Systems Engineering\">Enterprise Systems Engineering</option><option value=\"Engineering Management\">Engineering Management</option><option value=\"Business Analytics\">Business Analytics</option><option value=\"Business Entrepreneurship\">Business Entrepreneurship</option></optgroup></select>";
                  document.getElementById('year-row').style.display='none';
                }

                else if(checkedStatus=="undergrad-alumnus"){
                  title.innerHTML="Degree:";
                  options.innerHTML="<select name='p-degree' required><option value=\"\" readonly>Please Choose Degree</option><optgroup label=\"King Hussein School of Computing Sciences\"><option value=\"Computer Science B.SC.\">Computer Science B.SC.</option><option value=\"Computer Graphics and Animation B.SC.\">Computer Graphics and Animation B.SC.</option><option value=\"Software Engineering B.SC.\">Software Engineering B.SC.</option></optgroup><optgroup label=\"King Abdullah II School of Engineering\"><option value=\"Electronics Engineering B.SC.\">Electronics Engineering B.SC.</option><option value=\"Computer Engineering B.SC.\">Computer Engineering B.SC.</option><option value=\"Communications Engineering B.SC.\">Communications Engineering B.SC.</option><option value=\"Electrical Power and Energy Engineering B.SC.\">Electrical Power and Energy Engineering B.SC.</option><option value=\"Networks and Information Security Engineering B.SC.\">Networks and Information Security Engineering B.SC.</option></optgroup><optgroup label=\"King Talal School of Business Technology\"><option value=\"Business Administration B.SC.\">Business Administration B.SC.</option><option value=\"Accounting B.SC.\">Accounting B.SC.</option><option value=\"E-Marketing and Social Media B.SC.\">E-Marketing and Social Media B.SC.</option><option value=\"Business Information Technology B.SC.\">Business Information Technology B.SC.</option></optgroup></select>";
                  document.getElementById('year-row').style.display='none';
                }

                else if(checkedStatus="grad-alumnus"){
                  title.innerHTML="Degree:";
                  options.innerHTML="<select name='p-degree' required><option value=\"\" readonly>Please Choose Degree</option><optgroup label=\"King Abdullah I School of Graduate Studies and Scientific Research\"><option value=\"Computer Science M.SC.\">Computer Science M.SC.</option><option value=\"Data Science M.SC.\">Data Science M.SC.</option><option value=\"IT Security and Digital Criminology M.SC.\">IT Security and Digital Criminology M.SC.</option><option value=\"Intelligent Systems and Computer Engineering M.SC.\">Intelligent Systems and Computer Engineering M.SC.</option><option value=\"Electrical Engineering M.SC.\">Electrical Engineering M.SC.</option><option value=\"Enterprise Systems Engineering M.SC.\">Enterprise Systems Engineering M.SC.</option><option value=\"Engineering Management M.SC.\">Engineering Management M.SC.</option><option value=\"Business Analytics M.SC.\">Business Analytics M.SC.</option><option value=\"Business Entrepreneurship M.SC.\">Business Entrepreneurship M.SC.</option></optgroup></select>";
                  document.getElementById('year-row').style.display='none';
                }

              }
    </script>


  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-6">
              <div class="site-logo">
                <a href="index.php" class="font-weight-bold">Tangler.</a>
              </div>
            </div>

            <div  class="col-5">

                <?php
                  if(isset($_SESSION['userId'])){

                  echo '<form action="includes/logout.inc.php" method="POST"><table cellpadding="10px" style="color:white"><tr><td>Hello, '.$_SESSION['userFname'].' '.$_SESSION['userLname'].'</td><td><button type="submit" name="logout-submit" class="btn btn-primary btn-outline-white py-3 px-5 log-button" id="logoutbtn">Log Out</button></td></tr></table></form>';
                  }
                    else {
                      echo '<div style="float:right"><a href="login.php" class="btn btn-primary btn-outline-white py-3 px-5 log-button" id="loginbtn">Log In</a></div>';
                    }

                ?>

              </div>


            <div class="col-1  text-right">

              <span class="d-inline-block d-lg-block"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class><a href="index.php" class="nav-link">Home</a></li>
                  <?php
                    if(isset($_SESSION['userId']))
                      echo '<li><a href="profile.php" class="nav-link">Your Profile</a></li>';
                  ?>
                  <li><a href="chat.php" class="nav-link">Chat</a></li>
                  <li class="active"><a href="search.php" class="nav-link ">Search Users</a></li>
                  <li><a href="report.php" class="nav-link">Report A Problem</a></li>
                </ul>
              </nav>
            </div>


          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('images/cover.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h1 class="mb-4 text-white">Search for Tanglers</h1>
              <p class="mb-4" style="font-style: italic"><br>Tip of the day:<br><br>Don't forget to update your profile information<br>to appear on the search results of other Tanglers!</p>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="site-section">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-md-5">

          <div class="row">
            <h4>Search by Filter</h4>
          </div>
            <div class="row">
              <input type="text" id="nameSearch" placeholder="Search by name (optional)" style="width:50%"><br>
            </div>
            <div class="row">
              <p><label style="font-weight:bold">Status</label><br>
              <label><input type="radio" name="status[]" value="undergrad" onchange="handleChange()" checked/> Undergraduate</label><br>
              <label><input type="radio" name="status[]" value="grad" onchange="handleChange()"/> Graduate</label><br>
              <label><input type="radio" name="status[]" value="undergrad-alumnus" onchange="handleChange()"/> Undergraduate Alumnus</label><br>
              <label><input type="radio" name="status[]" value="grad-alumnus" onchange="handleChange()"/> Graduate Alumnus</label>
              </p>
            </div>
            <div class="row">
              <p><label style="font-weight:bold" id="studyTitle">Major</label>
              <select name='p-degree' id="studyOptions">
                <option value="" readonly>Please Choose Major</option>
                <optgroup label="King Hussein School of Computing Sciences">
                  <option value="Computer Science">Computer Science</option>
                  <option value="Computer Graphics and Animation">Computer Graphics and Animation</option>
                  <option value="Software Engineering">Software Engineering</option>
                </optgroup>
                <optgroup label="King Abdullah II School of Engineering">
                  <option value="Electronics Engineering">Electronics Engineering</option>
                  <option value="Computer Engineering">Computer Engineering</option>
                  <option value="Communications Engineering">Communications Engineering</option>
                  <option value="Electrical Power and Energy Engineering">Electrical Power and Energy Engineering</option>
                  <option value="Networks and Information Security Engineering">Networks and Information Security Engineering</option>
                </optgroup>
                <optgroup label="King Talal School of Business Technology">
                  <option value="Business Administration">Business Administration</option>
                  <option value="Accounting">Accounting</option>
                  <option value="E-Marketing">E-Marketing and Social Media</option>
                  <option value="Business Information Technology">Business Information Technology</option>
                </optgroup>
            </select>
            </p>
          </div>
            <div class="row">
            <p><button class="btn btn-primary px-5" onclick="Filter()">Search Users</button></p>
          </div>
          </div>

          <div class="col-md-7">
            <div class="row">
              <h4>Search Results</h4>
            </div>
              <?php

                $sql="SELECT * FROM users";
                $result=mysqli_query($conn, $sql);
                $queryResults=mysqli_num_rows($result);

                if($queryResults>0){

                      while($row=mysqli_fetch_assoc($result)){

                      $status=$row['statusUsers'];
                      $degree=$row['degreeUsers'];
                      $year=$row['yearUsers'];

                        if(($status!=NULL)&&($degree!=NULL)&&($year!=0))
                        echo "<div style='display:none;' class=\"row userresult\"><div class='col-3 usernameresult'>".$row['fnameUsers']." ".$row['lnameUsers']."</div><br><div class='col-9'><span class='userstatusresult'>".$status."</span><span>, </span><span class='userdegreeresult'>".$degree."</span><span>, </span><span class='yearresult'>".$year."</span></div></div>";

                        elseif(($row['degreeUsers']!=NULL)&&($row['statusUsers']!=NULL)&&($row['yearUsers'])==0)
                        echo "<div style='display:none;' class=\"row userresult\"><div class='col-3 usernameresult'>".$row['fnameUsers']." ".$row['lnameUsers']."</div><br><div class='col-9'><span class='userstatusresult'>".$status."</span><span>, </span><span class='userdegreeresult'>".$degree."</span></div></div>";

                      }
                    }

               ?>
            <!--  <div class="row">
              <span class="userPic"><img src="images/accounting1.png" class="img-fluid" style="width: 50px; height: 50px"/></span>
              <span class="userInfo" style="display: block; margin-left: 10px;">
                <span class="userName">Leen</span><br>
                <span class="userStatus">Grad, </span>
                <span class="userDegree">CS, </span>
                <span class="userYear">3 </span>
              </span>
            </div>
-->
            </div>

            </div>


          </div>
        </div>
      </div>
    </div>


    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>
