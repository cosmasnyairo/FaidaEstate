<?php
include('dbconnection.php');

session_start();

$query = "UPDATE resident_details SET last_activity = now() WHERE login_details_id = '".$_SESSION["login_details_id"]."'";

$statement = $connect->prepare($query);

$statement->execute();

?>