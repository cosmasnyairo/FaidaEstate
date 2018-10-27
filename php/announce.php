<?php
error_reporting(0);
$host = "localhost";
$user = "root";
$pass = "";
$database = "estate";
session_start();

if(!isset($_SESSION['user_id']))
{
 header('location:login.php');
}
  $host = "localhost";
  $user = "root";
  $pass = "";
  $database = "estate";
  echo $_SESSION['username'];

  $connection_String = mysqli_connect($host,$user,$pass,$database);
   $message_title = $_POST["title"];
   $message_body = $_POST["message"];
   $message_sender = $_SESSION['username'];;

    if($message_title!=""&& $message_body!=""){

      $insert_query_command = "INSERT INTO general_announcement (`id`, `message_title`, `message_body`, `sender`, `date`) VALUES (NULL, '$message_title', '$message_body', '$message_sender', CURRENT_TIMESTAMP)";
      $execute_insert_query = mysqli_query($connection_String,$insert_query_command);
    }

   ?>
 