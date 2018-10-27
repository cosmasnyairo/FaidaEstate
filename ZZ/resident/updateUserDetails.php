<?php
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = ""; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "estate"; // MySQL Database name

// Connect to MySQL Database
$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
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