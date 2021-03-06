
<?php

$result="";
 if (isset($_POST['sendemailbutton'])) {
  require 'PHPMailer/PHPMailerAutoload.php';


 $name = $_POST['Firstntosendemail'];
 $fname=  $_POST['Lastntosendemail'];
 $from = $_POST['Emailsend'];
 $subject = "Report a problem";
 $msg = $_POST['texttosendemail'];
 $n= $name . " " . $fname;


 $mail = new PHPMailer();
 $mail->Host = "ssl://smtp.gmail.com";
 $mail->Port = 465;
 $mail->SMTPAuth = true;
 //$mail->SMTPSecure = 'tls';
 $mail->isSMTP();
 $mail->Username = 'tanglerinfor@gmail.com';
 $mail->Password = 'RamiLeen';
 $mail->SetFrom($from, $n);
 $mail->addAddress('rami.habash99@gmail.com');
 $mail->addAddress('leen.abushaar@gmail.com');
 $mail->addReplyTo($from, $n);

 $mail->isHTML(true);

 $mail->Subject = 'Reporting a problem';
 $mail->Body ="<h1>Name: $n <br>Email from:  $from <br>Message: $msg</h1>";



  if(!$mail->send()) {
    $result= 'Message could not be sent.';
    $result .= 'Mailer Error: ' . $mail->ErrorInfo;
  }
  else {
    $result= "Thanks $n for contacting us. We'll get back to you soon!";
  }
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


            <div class="col-7  text-right">

              <span class="d-inline-block d-lg-block"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li ><a href="index.php" class="nav-link">Home</a></li>
                  <li><a href="chat.php" class="nav-link">Chat</a></li>
                  <li><a href="search.php" class="nav-link">Search Users</a></li>
                  <li class="active"><a href="report.php" class="nav-link">Report A Problem</a></li>
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
              <h1 class="mb-4 text-white">Report A Problem</h1>
              <p class="mb-4"></p>
            </div>
          </div>
        </div>
      </div>
    </div>




   <div id="henno" class="site-section">
      <div class="container">



        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="report.php#henno" method="post" >
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name" name="Firstntosendemail" required>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name" name="Lastntosendemail" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="Email address" name="Emailsend" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea  id=" texttoemail" class="form-control" placeholder="Write your message." cols="30" rows="10" name="texttosendemail" required></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit"  name="sendemailbutton" class="btn btn-block btn-primary py-3 px-5" value="Send Message" >
                </div>
                <div class="col-md-6 mr-auto">
                  <label><?= $result;?></label>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>tanglerinfor@gmail.com</span></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div> <!-- END .site-section -->





    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-3">About Us</h2>
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
