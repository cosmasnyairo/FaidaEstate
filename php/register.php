<?php
     session_start();
     $db = mysqli_connect('localhost', 'root', '', 'estate');
   
	$update = false;
 
      if(isset($_POST['save'])) {
	    
		$name = $_POST['name'];
		$houseNumber = $_POST['houseNo'];
		$email = $_POST['email'];
		$phoneNo = $_POST['phoneNo'];
		$password = $_POST['pass'];
		mysqli_query($db, "INSERT INTO new_residents (name, houseNumber, email, phoneNo, password) VALUES ('$name','$houseNumber', '$email', '$phoneNo', '$password')"); 
	            echo '<script language="javascript">';
                echo 'alert("Thank You for Signing Up With Us! You will wait for an e-mail confirmation from the Estate Chairperson.")';
                echo '</script>';
				echo "<script>location.href='../html/home.html';</script>";	 
}

 ?>