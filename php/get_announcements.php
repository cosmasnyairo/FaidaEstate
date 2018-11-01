<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "faida_estate";

$connection_String = mysqli_connect($host,$user,$pass,$database);
 $get_all_announcement_command = "SELECT * FROM general_announcement ORDER BY id DESC";
 $execute_get_announcement_query = mysqli_query($connection_String,$get_all_announcement_command);


 while( $get_rows = mysqli_fetch_assoc($execute_get_announcement_query)){

 echo "<div class='col-lg-4 col-md-4 col-sm-6'>";
 echo "<div class='panel panel-decorated'>
           <div class = 'panel-heading'>
         <h4 class = 'panel-title ptitle'>".$get_rows["message_title"]."</h4>
       </div>";

  echo  "<div class = 'panel-body pbody'>
         <span>".$get_rows["message_body"]."</span>
         <br><br>
         <br><br>
         <span> Sent By: Sectretary</span>
          </div>
       </div>
       </div>";
     }

 ?>
