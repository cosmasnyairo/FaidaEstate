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
	$houseNumber = e($_POST['username']);
	$password = e($_POST['pass']);
    
    $query = "SELECT * FROM resident WHERE houseNumber='$houseNumber' AND pass='$password' LIMIT 1";
		$result = mysqli_query($db, $query);
		
		if (mysqli_num_rows($result) == 1) { 
		       
			   
			   $row = mysqli_fetch_row($result);
			 
				$_SESSION['login_id'] = $row[0];
				$_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                
				echo '<script language="javascript">';
                echo 'alert("Welcome!")';
                echo '</script>';
				echo "<script>location.href='../php/dashboard.php';</script>";	
				
			}
			else{
				echo '<script language="javascript">';
                echo 'alert("Wrong Login Information. Please Try Again.")';
                echo '</script>';
				echo "<script>location.href='../html/login.html';</script>";
			}
	}
	
function e($val){
	global $db, $id;
	return mysqli_real_escape_string($db, trim($val));
}

?>