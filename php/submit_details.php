<?php
session_start();
$id = $_SESSION['login_id'];
	if(isset($_POST['submit'])){//if the submit button is clicked
	$name = $_POST['name'];
	$houseNumber = $_POST['houseNumber'];
	$email = $_POST['email'];
	$phoneNo = $_POST['phoneNo'];
	$update = "UPDATE resident SET name='$name', houseNumber='$houseNumber', email='$email', phoneNo='$phoneNo' WHERE user_id ='$id' ";
	$sql = "SELECT * FROM resident WHERE user_id = '$id'";
	$result = $conn->query($sql) or die(mysql_error());
	}

}
global $update;
	if($update){//if the update worked
	echo '<script language="javascript">';
                echo 'alert("Your Account Has been Updated!")';
	}
$conn->close();
?>  