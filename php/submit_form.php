<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faida_estate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 // Submitted form data
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $message= $_POST['message'];

if(isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) 
    && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)
     && !empty($_POST['message'])){
    

    $sql = "INSERT INTO admin_requests (name, email, message) VALUES ('$name', '$email', '$message')";
    $status = 'ok';


    if(!$result = mysqli_query($conn, $sql)){
        $status = 'err';
    }
    
    // Output status
    echo $status;die;
}