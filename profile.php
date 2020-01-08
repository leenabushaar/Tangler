<?php
 session_start();
 if(!isset($_SESSION['userId'])){
     header("Location: login.php");
     die();
 }
?>

<!doctype html>
<html lang="en">

  <head>
    <title>Tangler &mdash; Your Virtual Campus</title>
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
      margin-top: 10px;
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

    .item-wrap{
      height:219.78;
    }

   .item{
    width:330px;

   }

     table td{
       color: white;
       text-align: left;
     }


    .your-profile{
      margin-top: 40%;
    }

    body{
      background-color: grey;
    }

    </style>

       <script>

          function handleChange(){

            statusArr=document.getElementsByName('status[]');
            title=document.getElementById('studyTitle');
            options=document.getElementById('studyOptions');


            if(statusArr[0].checked){
              title.innerHTML="Major:";
              options.innerHTML="<select name='p-degree' required><option value=\"\" readonly>Please Choose Major</option><optgroup label=\"King Hussein School of Computing Sciences\"><option value=\"Computer Science\">Computer Science</option><option value=\"Computer Graphics and Animation\">Computer Graphics and Animation</option><option value=\"Software Engineering\">Software Engineering</option></optgroup><optgroup label=\"King Abdullah II School of Engineering\"><option value=\"Electronics Engineering\">Electronics Engineering</option><option value=\"Computer Engineering\">Computer Engineering</option><option value=\"Communications Engineering\">Communications Engineering</option><option value=\"Electrical Power and Energy Engineering\">Electrical Power and Energy Engineering</option><option value=\"Networks and Information Security Engineering\">Networks and Information Security Engineering</option></optgroup><optgroup label=\"King Talal School of Business Technology\"><option value=\"Business Administration\">Business Administration</option><option value=\"Accounting\">Accounting</option><option value=\"E-Marketing and Social Media\">E-Marketing and Social Media</option><option value=\"Business Information Technology\">Business Information Technology</option></optgroup></select>";
              document.getElementById('year-row').style.display='block';
            }

            else if(statusArr[1].checked){
              title.innerHTML="Program:";
              options.innerHTML="<select name='p-degree' required><option value=\"\" readonly>Please Choose Program</option><optgroup label=\"King Abdullah I School of Graduate Studies and Scientific Research\"><option value=\"Computer Science\">Computer Science</option><option value=\"Data Science\">Data Science</option><option value=\"IT Security and Digital Criminology\">IT Security and Digital Criminology</option><option value=\"Intelligent Systems and Computer Engineering\">Intelligent Systems and Computer Engineering</option><option value=\"Electrical Engineering\">Electrical Engineering</option><option value=\"Enterprise Systems Engineering\">Enterprise Systems Engineering</option><option value=\"Engineering Management\">Engineering Management</option><option value=\"Business Analytics\">Business Analytics</option><option value=\"Business Entrepreneurship\">Business Entrepreneurship</option></optgroup></select>";
              document.getElementById('year-row').style.display='none';
            }

            else if(statusArr[2].checked){
              title.innerHTML="Degree:";
              options.innerHTML="<select name='p-degree' required><option value=\"\" readonly>Please Choose Degree</option><optgroup label=\"King Hussein School of Computing Sciences\"><option value=\"Computer Science B.SC.\">Computer Science B.SC.</option><option value=\"Computer Graphics and Animation B.SC.\">Computer Graphics and Animation B.SC.</option><option value=\"Software Engineering B.SC.\">Software Engineering B.SC.</option></optgroup><optgroup label=\"King Abdullah II School of Engineering\"><option value=\"Electronics Engineering B.SC.\">Electronics Engineering B.SC.</option><option value=\"Computer Engineering B.SC.\">Computer Engineering B.SC.</option><option value=\"Communications Engineering B.SC.\">Communications Engineering B.SC.</option><option value=\"Electrical Power and Energy Engineering B.SC.\">Electrical Power and Energy Engineering B.SC.</option><option value=\"Networks and Information Security Engineering B.SC.\">Networks and Information Security Engineering B.SC.</option></optgroup><optgroup label=\"King Talal School of Business Technology\"><option value=\"Business Administration B.SC.\">Business Administration B.SC.</option><option value=\"Accounting B.SC.\">Accounting B.SC.</option><option value=\"E-Marketing and Social Media B.SC.\">E-Marketing and Social Media B.SC.</option><option value=\"Business Information Technology B.SC.\">Business Information Technology B.SC.</option></optgroup></select>";
              document.getElementById('year-row').style.display='none';
            }

            else if(statusArr[3].checked){
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

            <div class="col-5">
              <div class="site-logo">
                <a href="index.php" class="font-weight-bold">Tangler.</a>
              </div>
            </div>

            <div class="col-5" style="padding-right: 25px">
              <div style="text-align:right">

                <?php
                  if(isset($_SESSION['userId'])){

                    echo '<p style="color:white">Hello, '.$_SESSION['userFname'].' '.$_SESSION['userLname'].'</p>
                    <form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="logout-submit" class="btn btn-primary btn-outline-white py-3 px-5 log-button" id="logoutbtn">Log Out</button>
                    </form>';
                }
                else{
                  echo '<p><a href="login.php" class="btn btn-primary btn-outline-white py-3 px-5 log-button" id="loginbtn">Log In</a></p>';
                }
                ?>

              </div>
            </div>

            <div class="col-2  text-right">

              <span class="d-inline-block d-lg-block"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="index.php" class="nav-link">Home</a></li>
                  <?php
                    if(isset($_SESSION['userId']))
                      echo '<li><a href="profile.php" class="nav-link active">Your Profile</a></li>';
                  ?>
                  <li><a href="chat.php" class="nav-link">Chat</a></li>
                  <li><a href="search.php" class="nav-link">Search Users</a></li>
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
          <div class="row align-items-center justify-content-center" id="form-container">
            <div class="col-md-5">
              <div class="row justify-content-center your-profile">

            <h3 class="text-white">Your Profile</h3>

          </div>

          <div class="row">

            <?php
              if(isset($_GET['editprofile'])){

                if($_GET['editprofile']=="success"){
                  echo '<p style="text-align: left; margin-left: 65px; font-weight: bold">Changes saved.</p>';
                }

              }
              ?>

            </div>

            <div class="row justify-content-center">
              <form action="includes/editprofile.inc.php" method="POST">
                <table cellpadding="10px" style="text-align: center">
                  <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="p-fname" id="p-fname" value="<?php echo $_SESSION['userFname'];?>" required/></td>
                  </tr>
                  <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="p-lname" id="p-lname" value="<?php echo $_SESSION['userLname'];?>" required/></td>
                  </tr>
                  <tr>
                    <td>University:</td>
                    <td>Princess Sumaya University for Technology</td>
                  </tr>
                    <tr>
                      <td>Status:</td>
                      <td style="text-align:left">
                        <label><input type="radio" name="status[]" value="undergrad" onchange="handleChange()" <?php if ( (isset($_SESSION['userStatus'])) && ($_SESSION['userStatus']=="undergrad") ) echo 'checked'; if(!isset($_SESSION['userStatus'])) echo 'checked';?>/> Undergraduate</label><br>
                        <label><input type="radio" name="status[]" value="grad" onchange="handleChange()" <?php if ( (isset($_SESSION['userStatus'])) && ($_SESSION['userStatus']=="grad") ) echo 'checked';?>/> Graduate</label><br>
                        <label><input type="radio" name="status[]" value="undergrad-alumnus" onchange="handleChange()" <?php if ( (isset($_SESSION['userStatus'])) && ($_SESSION['userStatus']=="undergrad-alumnus") ) echo 'checked';?>/> Undergraduate Alumnus</label><br>
                        <label><input type="radio" name="status[]" value="grad-alumnus" onchange="handleChange()" <?php if ( (isset($_SESSION['userStatus'])) && ($_SESSION['userStatus']=="grad-alumnus") ) echo 'checked';?>/> Graduate Alumnus</label>
                      </td>
                    </tr>
                    <tr>
                    <td id="studyTitle">Major:</td>
                    <td style="text-align:left" id="studyOptions">
                      <?php if(isset($_SESSION['userDegree'])) echo $_SESSION['userDegree']." <button name=\"change-major\" class=\"btn btn-primary btn-outline-white py-3 px-5\" onclick=\"handleChange()\">Change Major</button>";
                      else echo "<select name='p-degree' id='studyOptions' required><option value=\"\" readonly>Please Choose Program</option><optgroup label=\"King Abdullah I School of Graduate Studies and Scientific Research\"><option value=\"mcs\">Computer Science</option><option value=\"mds\">Data Science</option><option value=\"mitsdc\">IT Security and Digital Criminology</option><option value=\"misce\">Intelligent Systems and Computer Engineering</option><option value=\"mee\">Electrical Engineering</option><option value=\"mese\">Enterprise Systems Engineering</option><option value=\"mem\">Engineering Management</option><option value=\"mba\">Business Analytics</option><option value=\"mbe\">Business Entrepreneurship</option></optgroup></select>";
                      ?>

                    <!--<select name='p-degree' required>
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
-->
                    </td>
                  </tr>

                  <tr id="year-row" style="display: <?php if($_SESSION['userStatus']!='undergrad') echo 'none';?>">
                    <td>Year:</td>
                    <td style="text-align: left"><input name="p-year" type="number" min="1" max="8" style="width: 50px" value="<?php if ( (isset($_SESSION['userYear'])) && ($_SESSION['userYear']!=0)) echo $_SESSION['userYear'];?>"/></td>
                  </tr>


                  <tr>
                    <td colspan="2" style="text-align: center">
                      <button type="submit" name="profile-submit" class="btn btn-primary btn-outline-white py-3 px-5">Save Changes</button>
                    </td>
                  </tr>


                </table>
              </form>
            </div>
          </div>
              <!--<h1 class="mb-4 text-white">Your Virtual Campus</h1>
              <p class="mb-4">A networking platform for university students and alumnus.<br/>Search for Tanglers based on their university, major, and academic status.</p>
              <p><a href="chat.php" class="btn btn-primary btn-outline-white py-3 px-5">Tangle Now</a></p>-->
            </div>
          </div>
        </div>
      </div>
    </div>


    <!--</div>-->

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
