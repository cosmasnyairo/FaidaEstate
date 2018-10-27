<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $residentID = $_POST['user_id'];
    $name = $_POST['name'];
    $houseNumber = $_POST['houseNumber'];
    $email = $_POST['email'];
    $phoneNo = $_POST['phoneNo'];

    // Updaste User details
    $query = "UPDATE resident SET name = '$name', houseNumber = '$houseNumber', email = '$email', phoneNo = '$phoneNo' WHERE user_id = '$residentID'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>