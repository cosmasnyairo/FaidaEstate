<?php
	if(isset($_POST['name']) && isset($_POST['houseNumber']) 
		&& isset($_POST['email']) && isset($_POST['phoneNo']) && isset($_POST['password']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$name = $_POST['name'];
		$houseNumber = $_POST['houseNumber'];
		$email = $_POST['email'];
		$phoneNo = $_POST['phoneNo'];
		$password = $_POST['password'];

		$query = "INSERT INTO resident(username, houseNumber, email, phoneNo, pass) VALUES('$name', '$houseNumber', '$email', '$phoneNo', '$password')";

		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Record Added!";
	}
?>

