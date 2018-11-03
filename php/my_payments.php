<?php
session_start();
$id = $_SESSION['login_id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faida_estate";

if( $_SESSION['Position'] != 'Resident')
{
  header("location:login.php");
}

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$query = "SELECT * FROM users WHERE user_id ='$id'";
$result1 = mysqli_query($conn, $query);
$row1 = mysqli_fetch_row($result1);
$userID = $row1[0];

$sql = "SELECT * FROM ((payments INNER JOIN users ON payments.user_id = users.user_id)
INNER JOIN statement ON payments.statementID = statement.statementID) WHERE payments.user_id ='$userID'";

$result = $conn->query($sql);

$conn->close();
?>  
<!DOCTYPE html>
<html>
<head> <title>e-Nyumba | My Payments </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main_dash.css">
    <link rel="icon" type="image/png" href="../Login_v13/images/icons/favicon.ico"/>
	
	<script src="../javascript/main.js"></script>
	
    <!-- Latest minified bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

     <!-- Latest minified bootstrap js -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>

<body>
<div class="header">
        <div class="logo">
          <i class="fa fa-comments"></i>
          <span>FAIDA ESTATE</span>   
        </div>

          <a href="#" class="nav-trigger"><span></span></a>
         <p align="center" style="margin-top: 15px; margin-right: 60px; text-align: right; color: white; font-weight: bold; "><?php echo $_SESSION['username']; ?></p>

    </div>
   <div class="side-nav">
      <div class="logo">
        <i class="fa fa-comments"></i>
        <span>Faida Estate</span>
      </div>
      <nav>
        <ul>
          <li>
            <a href="dashboard.php">
              <span><i class="fa fa-user"></i></span>
              <span>Profile</span>
            </a>
          </li>
          <li>
              <a href="chat.php">

                <span><i class="fa fa-envelope"></i></span>
                <span>Chat</span>
              </a>
            </li>
            
            <li>
              <a href="userannouncements.php">

                <span><i class="fa fa-bell"></i></span>
                <span>Announcements</span>
              </a>
            </li>
      
  
          <li>
            <a href="finances.php">
              <span><i class="fas fa-folder"></i></span>
              <span>Statements</span>
            </a>
          </li>

          <li class="active">
            <a href="#">
              <span><i class="fas fa-coins"></i></span>
              <span>My Payments</span>
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
				My Payments
			</div>
			<div class="main">
				 <div id="resident_table">
         <?php 
                               if ($result && $result->num_rows > 0) { 
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>    
                          <table class="table table-bordered">  
                               <tr>  
                                    <th>Resident Name</th>
                                    <th>Month</th>
                                    <th>Status</th>  
                                    <th>View</th>  
                               </tr>  
                               
                               <tr>  
                                    <td><?php echo $row["username"]; ?></td>  
                                    <td><?php echo $row["month"]; ?></td>
                                    <td><?php echo $row["status"]; ?></td>
                                    
                                    <td><input type="button" name="view" value="View" id="<?php echo $row["paymentID"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                               </tr>  
                               <?php } }else {
        echo "No payment made yet.";
      }
  
      ?>  
                          </table>  
                     </div>  
				</div>
				<div id="dataModal" class="modal fade">  
           <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Payment Details</h4>  
                </div>  
                <div class="modal-body" id="resident_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 
			
         
			
 


</body>
</html>
<script>
$(document).ready(function(){ 
	$(document).on('click', '.view_data', function(){  
           var user_id = $(this).attr("id");  
           if(user_id != '')  
           {  
                $.ajax({  
                     url:"select_payment.php",  
                     method:"POST",  
                     data:{user_id:user_id},  
                     success:function(data){  
                          $('#resident_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  

var logout = document.getElementById('logout');
logout.addEventListener('click', function() {
  if (confirm("Are you sure you want to log out?")) {
    location.href = "../html/home.html";
} else {
    location.href = "dashboard.php";
}
});

</script>

  