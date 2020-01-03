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

    .uniImages{
      text-align: center;
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

  #form-container{
    position: relative;
  }

#login-title{

  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -194.995px;
  margin-top: -16.8px;
  clear:both;
}


#login-form{

  position:absolute;
  top:75%;
  left:50%;
  margin-left: -20‬9.995px;
  margin-top: -106.4px;
  clear: both;
}

#createAccLink{
  color: white;
  /*border:1px solid white;*/
  padding: 5px;
  border-radius:15px;
}
#createAccLink:hover{
  background-color: white;
  color:black;
  border-color: #5f9eadbf;

}
#createAccLink:active{

  background-color: #3d6f7be6 !important;
  color:black !important;
  border-color: #3d6f7be6 !important;
  box-shadow: 1px 1px 1px 1px #3d6f7be6 !important;

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
                <a href="index.html" class="font-weight-bold">Tangler.</a>
              </div>
            </div>

            <div class="col-5" style="padding-right: 25px">
              <div style="text-align:right">

              </div>
            </div>

            <div class="col-2  text-right">

              <span class="d-inline-block d-lg-block"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="index.html" class="nav-link">Home</a></li>
                  <li><a href="chat.html" class="nav-link">Chat</a></li>
                  <li><a href="search.html" class="nav-link">Search Users</a></li>
                  <li><a href="report.html" class="nav-link">Report A Problem</a></li>
                </ul>
              </nav>
            </div>


          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center" id="form-container">
            <div class="col-md-7 text-center" id="login-title">

              <span class="text-white" style="float: none; margin: 0 auto; text-align: center">
                <h3 class="text-white" style="text-align: left">Sign Up</h3>
            <!--  </div>
              <div class="col-md-7 text center" id="login-form">
            -->

            <?php
              if(isset($_GET['error'])){

                if($_GET['error']=="emptyfields"){
                  echo '<p class="signuperror">Fill in all fields!</p>';
                }

                elseif($_GET['error']=="invalidemail"){
                  echo '<p class="signuperror">Invalid student email.</p>';
                }

                elseif($_GET['error']=="invalidfirstname"){
                  echo '<p class="signuperror">First name should only include letters.</p>';
                }

                elseif($_GET['error']=="invalidlastname"){
                  echo '<p class="signuperror">Last name should only include letters and spaces.</p>';
                }

                elseif($_GET['error']=="passwordchecl"){
                  echo '<p class="signuperror">Your passwords do not match.</p>';
                }

                elseif($_GET['error']=="emailexistsalready"){
                  echo '<p class="signuperror">Account for this email exists already.</p>';
                }
              }

              else if($_GET['signup']=="success"){
                echo '<p class="signupsuccess">Sign up successful.</p>';
              }
              ?>

              <form action="includes/signup.inc.php" method="POST">
                <table cellpadding="10px" style="text-align: center">
                  <tr>
                    <td class="text-white">First Name:</td>
                    <td><input type="text" name="ufname"/></td>
                  </tr>
                  <tr>
                    <td class="text-white">Last Name:</td>
                    <td><input type="text" name="ulname"/></td>
                  </tr>
                  <tr>
                    <td class="text-white">Student E-mail:</td>
                    <td><input type="text" name="uemail" value="@std.psut.edu.jo"/></td>
                  </tr>
                  <tr>
                    <td class="text-white">Password:</td>
                    <td><input type="password" name="upass"/></td>
                  </tr>
                  <tr>
                    <td class="text-white">Repeat Password:</td>
                    <td><input type="password" name="repeatpass"/></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <button type="submit" name="signup-submit" class="btn btn-primary btn-outline-white py-3 px-5">Sign Up</button>
                    </td>
                  </tr>
                </table>
              </form>
            </span>
            </div>
              <!--<h1 class="mb-4 text-white">Your Virtual Campus</h1>
              <p class="mb-4">A networking platform for university students and alumnus.<br/>Search for Tanglers based on their university, major, and academic status.</p>
              <p><a href="chat.html" class="btn btn-primary btn-outline-white py-3 px-5">Tangle Now</a></p>-->
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
