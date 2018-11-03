<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "faida_estate";
session_start();


if( $_SESSION['Position'] != 'Secretary')
{
  header("location:login.php");
}

if(!isset($_SESSION['user_id']))
{
 header('location:login.php');
} 
   $conn = new mysqli($host,$user,$pass,$database);
   $message_title = $_POST["txt_title"];
   $message_body = $_POST["txt_announcement"];
   $message_sender = $_SESSION['username'];;

     $sql = "INSERT INTO general_announcement (message_title, message_body, sender, date) VALUES ('$message_title', '$message_body', '$message_sender', CURRENT_TIMESTAMP)";
      if($result = mysqli_query($conn,$sql))
      {
        echo '<script language="javascript">';
    echo 'alert("Announcement Sent");';
    echo "location.href='../php/secretaryannouncements.php';";
    echo '</script>';
      }


   ?>
 