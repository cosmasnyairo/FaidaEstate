<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST['user_id']) && isset($_POST['user_id']) != "")
{
    // get values
    $user_id = $_POST['user_id'];
    $position = $_POST['position'];
    $houseNumber = $_POST['houseNumber'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phoneNo = $_POST['phoneNo'];

    // Updaste User details
    $query = "UPDATE users SET username = '$username', houseNumber = '$houseNumber',  Position = '$position',  email = '$email', phoneNo = '$phoneNo' WHERE user_id = '$user_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}

?>