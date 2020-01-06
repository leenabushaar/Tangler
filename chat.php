<?php
 session_start();
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
                  echo '<li><a href="profile.php" class="nav-link">Your Profile</a></li>';
              ?>
              <li class="active"><a href="chat.php" class="nav-link">Chat</a></li>
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
              <h1 class="mb-4 text-white">Chat Feature</h1>
              <p class="mb-4">Soon to be developed.</p>
            </div>
          </div>
        </div>
      </div>
    </div>




  <!--  <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">Selected Projects</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="item web">
              <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                <span class="icon-add"></span>
                <img class="img-fluid" src="images/img_1.jpg">
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="item web">
              <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                <span class="icon-add"></span>
                <img class="img-fluid" src="images/img_2.jpg">
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="item web">
              <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                <span class="icon-add"></span>
                <img class="img-fluid" src="images/img_3.jpg">
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="item web">
              <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                <span class="icon-add"></span>
                <img class="img-fluid" src="images/img_4.jpg">
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="item web">
              <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                <span class="icon-add"></span>
                <img class="img-fluid" src="images/img_5.jpg">
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="item web">
              <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                <span class="icon-add"></span>
                <img class="img-fluid" src="images/img_6.jpg">
              </a>
            </div>
          </div>

        </div>


      </div>
    </div>--> <!-- END .site-section -->

    <!--<div class="site-section bg-light">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">Testimonials</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">

            <div>
              <div class="person-pic-39219 mb-4">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
              </div>

              <blockquote class="quote_39823">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas excepturi accusantium non aut perspiciatis nisi magni libero, molestias.</p>
              </blockquote>
              <p>&mdash; Chris Smith</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">


            <div>
              <div class="person-pic-39219 mb-4">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              </div>
              <blockquote class="quote_39823">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas excepturi accusantium non aut perspiciatis nisi magni libero, molestias.</p>
              </blockquote>
              <p>&mdash; Chris Smith</p>
            </div>

          </div>
          <div class="col-lg-4 col-md-6">

            <div>
              <div class="person-pic-39219 mb-4">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              </div>
              <blockquote class="quote_39823">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas excepturi accusantium non aut perspiciatis nisi magni libero, molestias.</p>
              </blockquote>
              <p>&mdash; Chris Smith</p>
            </div>
          </div>
        </div>
      </div>
    </div>


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
          <p>-->
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        --><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <!--</p>
        <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
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
