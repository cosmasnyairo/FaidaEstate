<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'estate');

// variable declaration
$username = "";


// call the login() function if register_btn is clicked
if (isset($_POST['login'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $id;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['pass']);

    if($username = 'mnjenga'){
    $query1 = "SELECT * FROM administrator WHERE username='$username' AND password='$password' LIMIT 1";
	$results1 = mysqli_query($db, $query1);

	
		if (mysqli_num_rows($results1) == 1) { 
			$logged_in_user = mysqli_fetch_assoc($results1);
			   if ($logged_in_user['password'] == $password) {
				
				echo '<script language="javascript">';
                echo 'alert("Welcome!")';
                echo '</script>';
				echo "<script>location.href='../php/chairdashboard.php';</script>";	
			    }
			  else {
				echo '<script language="javascript">';
                echo 'alert("Wrong Login Information. Please Try Again.")';
                echo '</script>';
				echo "<script>location.href='../html/adminlogin.html';</script>";
			   }
			}}
			
	if ($username = 'sorina'){
	$query2 = "SELECT * FROM administrator WHERE username='$username' AND password='$password' LIMIT 1";
	$results2 = mysqli_query($db, $query2);

	
		if (mysqli_num_rows($results2) == 1) { 
			$logged_in_user = mysqli_fetch_assoc($results2);
			   if ($logged_in_user['password'] == $password) {
				
				echo '<script language="javascript">';
                echo 'alert("Welcome!")';
                echo '</script>';
				echo "<script>location.href='../php/treasurerdashboard.php';</script>";	
				
			}
			else{
				echo '<script language="javascript">';
                echo 'alert("Wrong Login Information. Please Try Again.")';
                echo '</script>';
				echo "<script>location.href='../html/adminlogin.html';</script>";
			}
	}}
	if ($username = 'trotich'){
	$query3 = "SELECT * FROM administrator WHERE username='$username' AND password='$password' LIMIT 1";
	$results3 = mysqli_query($db, $query3);

	
		if (mysqli_num_rows($results3) == 1) { 
			$logged_in_user = mysqli_fetch_assoc($results3);
			   if ($logged_in_user['password'] == $password) {
				 $_SESSION['login_id'] = $logged_in_user['adminID'];
				echo '<script language="javascript">';
                echo 'alert("Welcome!")';
                echo '</script>';
				echo "<script>location.href='../php/secretarydashboard.php';</script>";	
				
			}
			else{
				echo '<script language="javascript">';
                echo 'alert("Wrong Login Information. Please Try Again.")';
                echo '</script>';
				echo "<script>location.href='../html/adminlogin.html';</script>";
			}
	}}
	if ($username = 'sysadmin'){
	$query4 = "SELECT * FROM administrator WHERE username='$username' AND password='$password' LIMIT 1";
	$results4 = mysqli_query($db, $query4);

	
		if (mysqli_num_rows($results4) == 1) { 
			$logged_in_user = mysqli_fetch_assoc($results4);
			   if ($logged_in_user['password'] == $password) {
				
				echo '<script language="javascript">';
                echo 'alert("Welcome!")';
                echo '</script>';
				echo "<script>location.href='../php/admindashboard.php';</script>";	
				
			}
			else{
				echo '<script language="javascript">';
                echo 'alert("Wrong Login Information. Please Try Again.")';
                echo '</script>';
				echo "<script>location.href='../html/adminlogin.html';</script>";
			}
	}}
	
}
function e($val){
	global $db , $id;
	return mysqli_real_escape_string($db, trim($val));
}
	
?>