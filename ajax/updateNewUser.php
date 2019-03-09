
<?php
// include Database connection file
include("db_connection.php");

if(isset($_POST['user_id']) && isset($_POST['user_id']) != "")
{
    $userID = $_POST['user_id'];
    $status = 'Resident';
   
    // Update User details
    $query1 = "UPDATE users SET Position = '$status' WHERE user_id = '$userID'";
    if (!$result = mysqli_query($con, $query1)) {
        exit(mysqli_error($con));
    }
}
?>