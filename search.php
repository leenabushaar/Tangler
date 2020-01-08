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



  .log-button{
    border: none;
    margin-right: 0px;
    width: auto;
  }
    </style>


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
                  <li class><a href="index.php" class="nav-link">Home</a></li>
                  <?php
                    if(isset($_SESSION['userId']))
                      echo '<li><a href="profile.php" class="nav-link">Your Profile</a></li>';
                  ?>
                  <li><a href="chat.php" class="nav-link">Chat</a></li>
                  <li><a href="search.php" class="nav-link active">Search Users</a></li>
                  <li><a href="report.php" class="nav-link">Report A Problem</a></li>
                </ul>
              </nav>
            </div>


          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('images/hero_1.jpg')">
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

        <div class="topnav">
          <input type="text" placeholder="Search by name" style="width:25%">
          <p><a href="#" class="btn btn-primary px-5">Search Users</a></p>
        </div>

        <div class="row align-items-center">
          <div class="col-md-4">
            <h2 class="h4 mb-4">Search by Filter</h2>
              <p><label style="font-weight:bold">Status</label><br>
              <label><input type="radio" name="status[]" value="undergrad" onchange="handleChange()" checked/> Undergraduate</label><br>
              <label><input type="radio" name="status[]" value="grad" onchange="handleChange()"/> Graduate</label><br>
              <label><input type="radio" name="status[]" value="undergrad-alumnus" onchange="handleChange()"/> Undergraduate Alumnus</label><br>
              <label><input type="radio" name="status[]" value="grad-alumnus" onchange="handleChange()"/> Graduate Alumnus</label>
              </p>

              <p><label style="font-weight:bold">Major</label>
              <select name='p-degree' id="studyOptions">
              <option value="" readonly>Select a Major</option>
              <optgroup label="King Hussein School of Computing Sciences">
                <option value="cs">Computer Science</option>
                <option value="cg">Computer Graphics and Animation</option>
                <option value="se">Software Engineering</option>
              </optgroup>
              <optgroup label="King Abdullah II School of Engineering">
                <option value="ee">Electronics Engineering</option>
                <option value="ce">Computer Engineering</option>
                <option value="come">Communications Engineering</option>
                <option value="epee">Electrical Power and Energy Engineering</option>
                <option value="nise">Networks and Information Security Engineering</option>
              </optgroup>
              <optgroup label="King Talal School of Business Technology">
                <option value="ba">Business Administration</option>
                <option value="acc">Accounting</option>
                <option value="em">E-Marketing and Social Media</option>
                <option value="bit">Business Information Technology</option>
              </optgroup>
            </select>
            </p>
            <p><label style="font-weight:bold">Year</label>
            <input style="margin-left:10px" name="p-year" type="number" min="1" max="8" style="width: 50px"/>
            </p>
            <p><a href="#" class="btn btn-primary px-5">Search Users</a></p>
          </div>
          <div class="col-md-4">
            <img src="images/about_1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-4">

            <h2 class="h4 mb-4">Our expertise and skills</h2>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>Writing</span>
                <span class="ml-auto">55%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>WordPress</span>
                <span class="ml-auto">85%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>Bootstrap</span>
                <span class="ml-auto">93%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 93%;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>jQuery</span>
                <span class="ml-auto">83%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">Our Team</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">

            <div>
              <div class="person-pic-39219 mb-4">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
              </div>

              <blockquote class="quote_39823 mb-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas excepturi accusantium non aut perspiciatis nisi magni libero, molestias.</p>
              </blockquote>
              <p class="mb-0">Chris Smith</p>
              <p class="text-muted">Co-Founder</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">


            <div>
              <div class="person-pic-39219 mb-4">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              </div>
              <blockquote class="quote_39823 mb-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas excepturi accusantium non aut perspiciatis nisi magni libero, molestias.</p>
              </blockquote>
              <p class="mb-0">Jean Smith</p>
              <p class="text-muted">Co-Founder</p>
            </div>

          </div>
          <div class="col-lg-4 col-md-6">

            <div>
              <div class="person-pic-39219 mb-4">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              </div>
              <blockquote class="quote_39823 mb-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas excepturi accusantium non aut perspiciatis nisi magni libero, molestias.</p>
              </blockquote>
              <p class="mb-0">Hannah Cooper</p>
              <p class="text-muted">Co-Founder</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="fact-39281 d-flex align-items-center">
              <div class="wrap-icon mr-3">
                <span class="icon-smile-o"></span>
              </div>
              <div class="text">
                <span class="d-block">83</span>
                <span>Happy Clients</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="fact-39281 d-flex align-items-center">
              <div class="wrap-icon mr-3">
                <span class="icon-coffee"></span>
              </div>
              <div class="text">
                <span class="d-block">3892</span>
                <span>Cup of Coffee</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="fact-39281 d-flex align-items-center">
              <div class="wrap-icon mr-3">
                <span class="icon-code"></span>
              </div>
              <div class="text">
                <span class="d-block">3,923,892</span>
                <span>Line of Codes</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="fact-39281 d-flex align-items-center">
              <div class="wrap-icon mr-3">
                <span class="icon-desktop_mac"></span>
              </div>
              <div class="text">
                <span class="d-block">3892</span>
                <span>Project Finish</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--<div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">See Our Studio</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">

            <a href="https://vimeo.com/191947042" data-fancybox  class="btn-video_38929">
              <span><span class="icon-play"></span></span>
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </div>



    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-3">About Me</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Connect</h2>
                <div class="social_29128 white mb-5">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                 </div>
                <h2 class="footer-heading mb-4">Newsletter</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form>
              </div>

            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
          -->  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        -->    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <!--    </p>
            </div>
          </div>

        </div>
      </div>
    </footer>
-->
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
