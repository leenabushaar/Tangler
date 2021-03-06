<?php
 session_start();
 ?>

<!DOCTYPE html>
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

    .uniImages{

      height:230px;
    }
   .item{
    width:330px;

   }

    html {
      scroll-behavior: smooth;
    }

    .icon{
      height: 20px;
      width: 20px;
      float: left;
      margin-right: 20px;

    }

    .innerIcon{
      margin-left:25px;
    }

    .titles{
      padding-bottom: 8px;
      line-height: 30px;
    }

  #how-it-works{
    padding-left: 40px;
  }

  .description{
    line-height: 1.75em;
  }

  h3.person{
    font-weight: 500;
    font-style: oblique;
  }

  .log-button{
    border: none;
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


                      if(isset($_GET['signup'])){

                          echo '<p style="text-align: left; font-weight: bold; color: #4e927c" class="signuperror">Signed up sucessfully. Welcome to Tangler!</p>';

                      }


                ?>

              </div>


            <div class="col-1  text-right">

              <span class="d-inline-block d-lg-block"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                  <?php
                    if(isset($_SESSION['userId']))
                      echo '<li><a href="profile.php" class="nav-link">Your Profile</a></li>';
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
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h1 class="mb-4 text-white">Your Virtual Campus</h1>
              <p class="mb-4">A networking platform for university students and alumnus.<br/>Search for Tanglers based on their university, major, and academic status.</p>
              <p><a href="chat.php" class="btn btn-primary btn-outline-white py-3 px-5">Tangle Now</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="h4 mb-8" id="how-it-works">How It Works</h2>
            <div class="titles">
              <img class="icon" src="images/email.png" alt="Email Icon"/>
              <p>Create a Tangler account using your student e-mail.</p>
            </div>
            <div class="titles">
              <img class="icon" src="images/search.png" alt="Search Icon"/>
              <p>Search for users filtered by:</p>
            <div>
              <img class="icon innerIcon" src="images/university.png" alt="University Icon"/>
              <p>University</p>
            </div>
            <div>
              <img class="icon innerIcon" src="images/books-piled-.png" alt="Major Icon"/>
              <p>Major</p>
            </div>
            <div>
              <img class="icon innerIcon" src="images/graduated.png" alt="Status Icon"/>
              <p>Status<span> (Undergraduate, Graduate Year, or Alumnus)</span></p>
            </div>
            </div>
            <div class="titles">
              <img class="icon" src="images/cartoons-character-with-big-eyes.png" alt="Token Icon"/>
              <p>Recognize similar users by the token given for each <br/>combination of profile characteristics.</p>
            </div>
            <div class="titles">
              <img class="icon" src="images/chat.png" alt="Chat Icon"/>
              <p>Send requests and start chatting!</p>
            </div>
            <p><a href="#partnerLink" class="btn btn-primary px-5">Partner Universities</a></p>
          </div>
          <div class="col-md-4">
            <img src="images/computer science3.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">Tanglers</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
              <span class="person-pic-39219 mb-4">
                <img src="images/computer science3.png" alt="Image" class="img-fluid">
              </span>
              <h3 class="person">Person X</h3>
              <p class="description" style="line-height:2.2em">PSUT<br/><span class="year">Undergraduate, Year 3</span><br/>Computer Science</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
              <span class="person-pic-39219 mb-4">
                <img src="images/business administration1.png" alt="Image" class="img-fluid">
              </span>
              <h3 class="person">Person Y</h3>
              <p class="description" style="line-height:2.2em">PSUT<br/><span class="year">Undergraduate, Year 1</span><br/>Business Administration</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
              <span class="person-pic-39219 mb-4">
                <img src="images/electrical engineering.png" alt="Image" class="img-fluid">
              </span>
              <h3 class="person">Person Z</h3>
              <p class="description" style="line-height:2.2em">PSUT<br/><span class="year">Graduate, Year 2</span><br/>Electrical Engineering</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
              <span class="person-pic-39219 mb-4">
                <img src="images/computer engineering6.png" alt="Image" class="img-fluid">
              </span>
              <h3 class="person">Person W</h3>
              <p class="description" style="line-height:2.2em">PSUT<br/><span class="year">Undergraduate, Year 6</span><br/>Computer Engineering</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="partnerLink">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">Partner Universities</h2>
          </div>
        </div>

        <div class="row justify-content-center text-center">
          <!-- <div class="col-md-6 col-lg-4 mb-4">
            <div class="item web">
              <a href="" class="item-wrap" data-fancybox="gal" data-width="330" data-height="230">
                <span class="icon-add"></span>

                <img class="img-fluid" src="">
              </a>
            </div>
          </div> -->

          <div class="col-md-6 col-lg-4 mb-4">

              <a href="images/psut.jpg" class="item-wrap" data-fancybox="gal" data-width="330" data-height="230">
                <img class="img-fluid img-thumbnail uniImages" src="images/psut.jpg">

              </a>

          </div>

         <!-- <div class="col-md-6 col-lg-4 mb-4">
            <div class="item web">
             <a href="" class="item-wrap" data-fancybox="gal" data-width="330" data-height="230">
                 <span class="icon-add"></span>
                <img class="img-fluid" src="">
              </a>
            </div>
          </div> -->

        <!--  <div class="col-md-6 col-lg-4 mb-4" style="display:none">
            <div class="item web">
              <a href="images/img_4.jpg" class="item-wrap" data-fancybox="gal" data-width="330" data-height="230">
                <span class="icon-add"></span>

              <img class="img-fluid" src="">

              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="item web">
              <a href="images/img_5.jpg" class="item-wrap" data-fancybox="gal" data-width="330" data-height="230">
                <span class="icon-add"></span>

                <img class="img-thumbnail uniImages" src="images/img_5.jpg">

              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="item web">
              <a href="images/img_6.jpg" class="item-wrap" data-fancybox="gal" data-width="330" data-height="230">
                <span class="icon-add"></span>

                <img class="img-thumbnail uniImages" src="images/img_6.jpg">

              </a>
            </div>-->
          </div>

        </div>


      </div>
    </div> <!-- END .site-section -->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-3" style="padding-bottom: 20px">About Us</h2>
                <p>We are students at Princess Sumaya University for Technology developing a platform that connects students and alumna of our university.<br/><br/>Our vision is to diversify this virtual campus to include universities around Jordan, besides our home university.</p>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="report.php">Report a problem</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Connect</h2>
                <div class="social_29128 white mb-5">
                  <a href="https://facebook.com"><span class="icon-facebook"></span></a>
                 </div>
              </div>

            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
            </div>
          </div>

        </div>
      </div>
    </footer>

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
