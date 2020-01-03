
<?php

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 require 'C:\xampp\htdocs\Tangler/PHPMailer\src\Exception.php';
 require 'C:\xampp\htdocs\Tangler/PHPMailer\src\PHPMailer.php';
 require 'C:\xampp\htdocs\Tangler/PHPMailer\src\SMTP.php';
 if (isset($_POST['sendemailbutton'])) {
 $name = $_POST['Firstntosendemail'];
 $fname=  $_POST['Lastntosendemail'];
 $from = $_POST['Emailsend'];
 $subject = "Report a problem";
 $msg = $_POST['texttosendemail'];
 $n= $name . " " . $fname;

 $mail = new PHPMailer;

 $mail->isSMTP();                                      // Set mailer to use SMTP
 $mail->Host = 'tanglerinfor@gmail.com';  // Specify main and backup SMTP servers
 $mail->SMTPAuth = true;                               // Enable SMTP authentication
 $mail->Username = 'tanglerinfor@gmail.com';                 // SMTP username
 $mail->Password = 'RamiLeen';                           // SMTP password
 $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

 $mail->From = $_POST['Emailsend'];
 $mail->FromName = $n;
 $mail->addAddress('tanglerinfor@gmail.com');     // Add a recipient
 //$mail->addAddress('ellen@example.com');               // Name is optional
 //$mail->addReplyTo('info@example.com', 'Information');
 //$mail->addCC('cc@example.com');
 //$mail->addBCC('bcc@example.com');

 $mail->WordWrap = 70;                                   // Set word wrap to 70 characters
 /*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
 $mail->addAttachment('/tmp/image.jpg', 'new.jpg');      // Optional name */
 $mail->isHTML(true);                                    // Set email format to HTML

 $mail->Subject = 'Reporting a problem';
 $mail->Body    = $msg;
 /*$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/

  if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  } 
  else {
    echo 'Message has been sent';
  }
}
?>