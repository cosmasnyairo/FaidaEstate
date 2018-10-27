<?php
// check request
if(isset($_POST['requestID']) && isset($_POST['requestID']) != "")
{
    // include Database connection file
    include("db_connection.php");

    // get user id
    $requestID = $_POST['requestID'];

    // delete User
    $query = "DELETE FROM admin_requests WHERE requestID = '$requestID'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>