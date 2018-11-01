<?php
include('../php/database_connection.php');

session_start();
$email=$_SESSION['email'];
$vcode=$_POST['vcode']; 
$password=trim($_POST['password']); 



if($vcode !== $_SESSION['code'])
{
  	echo '<script language="javascript">';
    echo 'alert("Code Dont Match! ");';
    echo "location.href='resetpassword.html';";
    echo '</script>';
}
else{$data = array(
     ':password'  => password_hash($password, PASSWORD_DEFAULT)
    );

    $query = "UPDATE users  SET password = :password WHERE email = '$email'";

    $statement = $connect->prepare($query);
    if($statement->execute($data))
    {
    echo '<script language="javascript">';
    echo 'alert("Password Reset Successfull!");';
    echo "location.href='../php/login.php';";
    echo '</script>';
    }
    else
    {
    echo '<script language="javascript">';
    echo 'alert("Password Reset Unsuccessfull!");';
    echo "location.href='resetpassword.html';";
    echo '</script>';

    }

}


?>
