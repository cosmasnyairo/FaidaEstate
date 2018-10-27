<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $adminID = $_POST['adminID'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $phoneNo = $_POST['phoneNo'];
    $username = $_POST['username'];

    // Updaste User details
    $query = "UPDATE administrator SET name = '$name', position = '$position', email = '$email', phoneNo = '$phoneNo', username = '$username' WHERE adminID = '$adminID'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>