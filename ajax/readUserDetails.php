<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST['user_id']) && isset($_POST['user_id']) != ""){
    // get User ID
    $user_id = $_POST['user_id'];

    // Get User Details
    $query = "SELECT * FROM users WHERE user_id = '$user_id'";
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
?>


