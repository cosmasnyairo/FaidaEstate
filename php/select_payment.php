<?php
session_start();
$id = $_SESSION['login_id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faida_estate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST["user_id"]))  
 {  
      $output = '';  
      
      $query = $sql = "SELECT * FROM 
      ((payments INNER JOIN users ON payments.user_id = users.user_id)
      INNER JOIN statement ON payments.statementID = statement.statementID) 
      WHERE paymentID = '".$_POST["user_id"]."'"; 
      $result = mysqli_query($conn, $query);  
      $output .= '  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["username"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>House Number</label></td>  
                     <td width="70%">'.$row["houseNumber"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Month of Subscription</label></td>  
                     <td width="70%">'.$row["month"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Security Fee</label></td>  
                     <td width="70%"> KES '.$row["security"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Infrastracture Maintenance Fee</label></td>  
                     <td width="70%"> KES '.$row["infrastructure"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Garbage Collection Fee</label></td>  
                     <td width="70%"> KES '.$row["garbage"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Total</label></td>  
                     <td width="70%"> KES '.$row["total_kes"].'</td>  
                </tr>     
                <tr>  
                     <td width="30%"><label>Status</label></td>  
                     <td width="70%">'.$row["status"].'</td>  
                </tr>    
           ';  
      }  
      $output .= '  
           </table>  
     
      ';  
      echo $output;  
 }  