<?php
//index.php
  $conn = mysqli_connect('localhost', 'root', '', 'estate');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  require 'contact/PHPMailerAutoload.php';
  $mail= new PHPMailer;
  //$mail->isSTMP(true);
  $mail->Host='stmp.gmail.com';
  $mail->Port=587;
  $mail->STMPAUTH=true;
  $mail->STMPSECURE='tls';

  $mail->Username='noreplyfaidaestate@gmail.com';
  $mail->Password='Faida667';
  $mail->setFrom($email,$name);  
  $mail->addAddress('noreplyfaidaestate@gmail.com');
  $mail->addReplyTo($email);

  $mail->isHTML(true);
  $mail->Subject=$subject;
  $mail->Body=$message;
  if($mail->send()){
    echo '<script language="javascript">';
    echo 'alert("message successfully sent!");';
    echo "location.href='../html/home.html';";
    echo '</script>';
  }                
  else{
    echo "Mail could not be Sent!" .$mail->ErrorInfo;
  }
?>