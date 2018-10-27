<?php
	if(isset($_POST['name']) && isset($_POST['position']) 
		&& isset($_POST['email']) && isset($_POST['phoneNo']) && isset($_POST['password']) && isset($_POST['username']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$name = $_POST['name'];
		$position = $_POST['position'];
		$email = $_POST['email'];
		$phoneNo = $_POST['phoneNo'];
		$password = $_POST['password'];
		$username = $_POST['username'];

		$query = "INSERT INTO administrator(name, position, email, phoneNo, password, username) VALUES('$name', '$position', '$email', '$phoneNo', '$password', '$username')";

		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Record Added!";
	}
?>

