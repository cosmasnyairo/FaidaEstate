<?php
	$conn = mysqli_connect('localhost', 'root', '', 'faida_estate');
 	session_start();
    $message='';
	$email=$_POST['email']; 

	$length = 10;
	$code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
	echo $code;

	$_SESSION['code'] = $code;
	$_SESSION['email'] = $email;

	require 'phpmailer/PHPMailerAutoload.php';
	$mail= new PHPMailer;
	//$mail->isSTMP(true);
	$mail->Host='stmp.gmail.com';
	$mail->Port=587;
	$mail->STMPAUTH=true;
	$mail->STMPSECURE='tls';

	$mail->Username='noreplyfaidaestate@gmail.com';
	$mail->Password='Faida667';
	$mail->setFrom('noreplyfaidaestate@gmail.com','Faida Estate');	
	$mail->addAddress($email);
	$mail->addReplyTo('noreplyfaidaestate@gmail.com');

	$mail->isHTML(true);
	$mail->Subject='Reset Password';
	$mail->Body='<h2 align=center> Your Verification Code is :</h2><br><h4 align=center>'.$code.'</h4>';
	if($mail->send()){
	echo '<script language="javascript">';
    echo 'alert("Please Check Your Email for Verification Code!");';
    echo "location.href='resetpassword.html';";
    echo '</script>';
	}                
	else{
		
	echo '<script language="javascript">';
    echo 'alert("Email not Sent...Please Retry");';
    echo "location.href='forgotpassword.html';";
    echo '</script>';
	}
?>