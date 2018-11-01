<?php
     $db = mysqli_connect('localhost', 'root', '', 'faida_estate');
     session_start();
     $id = $_SESSION['login_id'];

     $sql = "SELECT * FROM users WHERE user_id ='$id'";
     $query = "SELECT * FROM statement WHERE month ='2018-11'";
     
     $result = mysqli_query($db, $sql);
     $result1 = mysqli_query($db, $query);
     
     $row = mysqli_fetch_row($result);
     $row1 = mysqli_fetch_row($result1);

     $userID = $row[0];
     $statementID = $row1[0];
     
     $status = 'Paid';
     
          mysqli_query($db, "INSERT INTO payments (user_id, statementID , status) VALUES ('$userID','$statementID', '$status')"); 
          echo "<script>location.href='../php/my_payments.php';</script>";
?>
