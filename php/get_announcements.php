<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "faida_estate";

$conn = new mysqli($host,$user,$pass,$database);
 $sql = "SELECT * FROM general_announcement ORDER BY id DESC";
 $result = mysqli_query($conn,$sql);


 while( $get_rows = mysqli_fetch_assoc($result)){

 echo "<div class='col-lg-4 col-md-4 col-sm-6'>";
 echo "<div class='panel panel-decorated'>
           <div class = 'panel-heading'>
         <h4 class = 'panel-title ptitle'>".$get_rows["message_title"]."</h4>
       </div>";

  echo  "<div class = 'panel-body pbody'>
         <span>".$get_rows["message_body"]."</span>
         <br><br>
         <br><br>
         <span> Tom Rotich. <br>Sectretary</span>
          </div>
       </div>
       </div>";
     }

 ?>
