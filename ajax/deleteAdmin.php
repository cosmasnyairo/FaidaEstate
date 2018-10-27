<?php
// check request
if(isset($_POST['adminID']) && isset($_POST['adminID']) != "")
{
    // include Database connection file
    include("db_connection.php");

    // get user id
    $adminID = $_POST['adminID'];

    // delete User
    $query = "DELETE FROM administrator WHERE adminID = '$adminID'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>