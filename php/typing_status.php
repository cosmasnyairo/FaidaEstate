<?php

include('dbconnection.php');

session_start();

$query = "UPDATE resident_details SET is_type = '".$_POST["is_type"]."'WHERE login_details_id = '".$_SESSION["login_details_id"]."'";

$statement = $connect->prepare($query);

$statement->execute();

?>
