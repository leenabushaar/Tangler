
<?php


 if (isset($_POST['sendemailbutton'])) {
  require 'PHPMailer/PHPMailerAutoload.php';
  

 $name = $_POST['Firstntosendemail'];
 $fname=  $_POST['Lastntosendemail'];
 $from = $_POST['Emailsend'];
 $subject = "Report a problem";
 $msg = $_POST['texttosendemail'];
 $n= $name . " " . $fname;

 
 $mail = new PHPMailer;
 $mail->Host = 'smtp.gmail.com"';  // Specify main and backup SMTP servers
 $mail->Port = 465;
 $mail->SMTPAuth = true;                               // Enable SMTP authentication
 $mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
 $mail->isSMTP();    
 $mail->Username = 'tanglerinfor@gmail.com';                 // SMTP username
 $mail->Password = 'RamiLeen';                           // SMTP password

 $mail->SetFrom($from, $n);
 $mail->addAddress('rami.habash99@gmail.com');     // Add a recipient
 $mail->addReplyTo($from, $n);

 $mail->isHTML(true);  

 $mail->Subject = 'Reporting a problem';
 $mail->Body ='<h1>Name: '.$n. '<br>Email from: '. $from.'
 <br>Message: '.$msg.'</h1>'; 



  if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  } 
  else {
    echo 'Thanks'.$n."for contacting us. We'll get back to you soon!";
  }
}
?>