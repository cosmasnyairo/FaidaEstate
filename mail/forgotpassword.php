<?php
	$conn = mysqli_connect('localhost', 'root', '', 'estate');

	$email = $_POST['email'];

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
	$mail->subject='Reset Password';
	$mail->Body='<h2 align=center>Click This Link to Reset Password</h2><br><h4 align=center>http://127.0.0.1/estate/html/resetpassword.html</h4>';
	if($mail->send()){
		echo "Mail Sent!" .$mail->ErrorInfo;
	}                
	else{
		echo "Mail could not be Sent!" .$mail->ErrorInfo;
	}
?>
<html>  
    <head>  
        <title>Reset Password</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
   <br />
   
   <h3 align="center">Chat Application</a></h3><br />
   <br />
   <div class="panel panel-default">
      <div class="panel-heading">Forgot Password</div>
    <div class="panel-body">
     <form method="POST">
      <p class="text-danger"><?php echo $message; ?></p>
      <div class="form-group">
       <label>Enter Email</label>
       <input type="text" name="email" class="form-control" required />
      </div>
      <div class="form-group">
      
      </div>

     </form>
    </div>
   </div>
  </div>
    </body>  
</html>