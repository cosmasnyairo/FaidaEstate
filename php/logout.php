<?php

//logout.php
include('dbconnection.php');

session_start();

 $query = "UPDATE `resident_details` SET `status` = 'offline' WHERE `user_id` = '".$_SESSION['user_id']."'";
 $statement = $connect->prepare($query);
 $statement->execute();

session_destroy();

header('location:../html/login.html');

?>
