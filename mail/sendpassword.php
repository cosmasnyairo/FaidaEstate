<?php
	$conn = mysqli_connect('localhost', 'root', '', 'faida_estate');
 	session_start();

	$email=$_POST['email']; 
	$username=$_POST['username']; 
	$password=$_POST['password']; 

	echo "<script>document.writeln(email);</script>"; 

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
	$mail->Subject='Faida Estate Login Credentials ' ;
	$mail->Body='Hello '.$username.'. Use the Password below to login to Faida Estate System: </h2><br> <h4 align=center> '.$password.' </h4> ';
	if($mail->send()){
	echo '<script language="javascript">';
    echo 'alert("Mail Sent");';
    echo "location.href='../php/admin_manage_users.php;";
    echo '</script>';
	}                
	else{
		
	echo '<script language="javascript">';
    echo 'alert("Email not Sent...Please Retry");';
    echo "location.href='../php/admin_manage_users.php;";
    echo '</script>';
	}
?>