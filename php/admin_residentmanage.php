 <?php  
 $connect = mysqli_connect("localhost", "root", "", "estate");  
 $query = "SELECT * FROM resident ORDER BY user_id ASC";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
      <title> e-Nyumba Estate App | System Administrator: Manage Residents Module </title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../css/main_dash.css">
      <link rel="icon" type="image/png" href="../Login_v13/images/icons/favicon.ico"/>
      <script src="../javascript/main.js"></script>  
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
       <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
      </head>  
      <body>
      <div class="header">
      <div class="logo">
        <i class="fa fa-comments"></i>
        <span>FAIDA ESTATE</span>
      </div>
      <a href="#" class="nav-trigger"><span></span></a>
</div>
    <div class="side-nav">
      <div class="logo">
        <i class="fa fa-comments"></i>
        <span>Faida Estate</span>
      </div>
      <nav>
        <ul>
          <li> 
            <a href = "admindashboard.php">
              <span><i class="fas fa-address-card"></i></span>
              <span>Profile</span>
            </a>
          </li>
          <li class="active">
            <a href="#">
              <span><i class="fa fa-users"></i></span>
              <span>Manage Residents</span>
            </a>
          </li>
          <li>
            <a href="admin_adminmanage.php">
              <span><i class="fa fa-user"></i></span>
              <span>Manage Estate Administrators</span>
            </a>
          </li>
                 
           <li>
            <a id="logout">
              <span><i class="fa fa-sign-out"></i></span>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="main-content">
      <div class="title">
        Manage Resident Details
        <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"
         style="float:right">Add Resident</button>  
        
      </div>
      
      <div class="main">  
           <div class="container" style="width:700px;">     
                <div class="table-responsive">   
                     <div id="resident_table">  
                          <table class="table table-bordered">  
                               <tr>  
                                    <th width="70%">Resident Name</th>  
                                    <th width="15%">Edit</th>  
                                    <th width="15%">View</th>  
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["name"]; ?></td>  
                                    <td><input type="button" name="edit" value="Edit" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /></td>  
                                    <td><input type="button" name="view" value="View" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>  
                     </div>  
                </div>  
           </div>  

 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Resident Details</h4>  
                </div>  
                <div class="modal-body" id="resident_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Add New Resident </h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Enter Resident Name</label>  
                          <input type="text" name="name" id="name" class="form-control" />  
                          <br />  
                          <label>Enter House Number</label>  
                          <textarea name="houseNumber" id="houseNumber" class="form-control"></textarea>  
                          <br />  
                          <label>Enter E-mail Address</label>  
                          <textarea name="email" id="email" class="form-control"></textarea>  
                          <br />  
                          <label>Enter Phone Number</label>  
                          <input type="text" name="phoneNo" id="phoneNo" placeholder="254XXXXXXXXX" class="form-control" />  
                          <br />   
                          <input type="hidden" name="residentID" id="residentID" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>
 <script type="text/javascript">
$(document).ready(function() {
     $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
    $(document).on('click', '.edit_data', function(){  
           var residentID = $(this).attr("id");  
           $.ajax({  
                url:"admin_residentfetch.php",  
                method:"POST",  
                data:{residentID:residentID},  
                dataType:"json",  
                success:function(data){  
                     $('#name').val(data.name);  
                     $('#email').val(data.email);  
                     $('#phoneNo').val(data.phoneNo);  
                     $('#houseNumber').val(data.houseNumber);   
                     $('#residentID').val(data.id);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#name').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#email').val() == '')  
           {  
                alert("Email Address is required");  
           }  
           else if($('#phoneNo').val() == '')  
           {  
                alert("Phone Number is required");  
           }  
           else if($('#houseNumber').val() == '')  
           {  
                alert("House Number is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"admin_residentinsert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#resident_table').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', '.view_data', function(){  
           var residentID = $(this).attr("id");  
           if(residentID != '')  
           {  
                $.ajax({  
                     url:"admin_residentselect.php",  
                     method:"POST",  
                     data:{residentID:residentID},  
                     success:function(data){  
                          $('#resident_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });
 </script>
 </body>  
 </html>   