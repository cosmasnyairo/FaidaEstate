  <?php  
 $connect = mysqli_connect("localhost", "root", "", "estate");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $name = mysqli_real_escape_string($connect, $_POST["name"]);  
      $houseNumber = mysqli_real_escape_string($connect, $_POST["houseNumber"]);  
      $email = mysqli_real_escape_string($connect, $_POST["email"]);  
      $phoneNo= mysqli_real_escape_string($connect, $_POST["phoneNo"]);  
       
      if($_POST["user_id"] != '')  
      {  
           $query = "  
           UPDATE resident 
           SET name='$name',   
           houseNumber='$houseNumber',   
           email='$email',   
           phoneNo = '$phoneNo',      
           WHERE user_id='".$_POST["user_id"]."'";  
           $message = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO resident(name, houseNumber, email, phoneNo)  
           VALUES('$name', '$houseNumber', '$email', '$phoneNo');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM resident ORDER BY user_id DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">Resident Details</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["name"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["user_id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="View" id="' . $row["user_id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>