<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST['adminID']) && isset($_POST['adminID']) != "")
{
    // get User ID
    $adminID = $_POST['adminID'];

    // Get User Details
    $query = "SELECT * FROM administrator WHERE adminID = '$adminID'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}