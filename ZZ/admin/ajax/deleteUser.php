<?php
// check request
if(isset($_POST['user_id']) && isset($_POST['user_id']) != "")
{
    // include Database connection file
    include("db_connection.php");

    // get user id
    $residentID = $_POST['user_id'];

    // delete User
    $query = "DELETE FROM resident WHERE user_id = '$residentID'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>