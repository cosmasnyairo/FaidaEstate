<?php
	if(isset($_POST['username']) && isset($_POST['position']) && isset($_POST['houseNumber']) 
		&& isset($_POST['email']) && isset($_POST['phoneNo'])  && isset($_POST['password']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$plus = '+';
		$position = $_POST['position'];
		$houseNumber = $_POST['houseNumber'];
		$email = $_POST['email'];
		$phoneNo = $_POST['phoneNo'];
		$username = $_POST['username'];
		$password = password_hash('password', PASSWORD_DEFAULT),

        $phoneno = $plus . $phoneNo;

		$query = "INSERT INTO users (username, position, houseNumber, email, phoneNo, password) VALUES ('$username' , '$position', '$houseNumber', '$email', '$phoneno',  '$password')" ; 

		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Record Added!";
	}
?>


