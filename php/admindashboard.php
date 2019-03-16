<?php
session_start();
$id = $_SESSION['login_id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faida_estate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users WHERE user_id = '$id'";
$result = $conn->query($sql);
	$result = $conn->query($sql);

    
    if (!$result = mysqli_query($conn, $sql)) {
        exit(mysqli_error($conn));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
        
        while($row = mysqli_fetch_assoc($result))
        {
            $data = '<table class="table table-bordered table-striped">
                      <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["username"].'</td>  
                     </tr>  
                    <tr>  
                     <td width="30%"><label>Position</label></td>  
                     <td width="70%">'.$row["Position"].'</td>  
                    </tr> 
                   <tr>  
                     <td width="30%"><label>Email Address</label></td>  
                     <td width="70%">'.$row["email"].'</td>  
                    </tr>
                   <tr>  
                     <td width="30%"><label>Phone Number</label></td>  
                     <td width="70%"> '.$row["phoneNo"].'</td>  
                   </tr>
               
              
            </tr>';
            
        }
    }
    else
    {
        // records now found 
        $data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }

    $data .= '</table>';


	?>
<!DOCTYPE html>
<html>
<head>
	 <title>e-Nyumba | Administrator Dashboard </title>
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

	<div class="header">
			<div class="logo">
				<i class="fa fa-comments"></i>
				<span>FAIDA ESTATE</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
         <p align="center" style="margin-top: 15px; margin-right: 60px; text-align: right; color: white; font-weight: bold; ">Welcome, <?php echo $_SESSION['username']; ?></p>
</div>
		<div class="side-nav">
			<div class="logo">
				<i class="fa fa-comments"></i>
				<span>Faida Estate</span>
			</div>
			<nav>
				<ul>
					<li class="active">
						<a href="#">
							<span><i class="fas fa-address-card"></i></span>
							<span>Profile</span>
						</a>
					</li>
					<li>
						<a href="admin_manage_users.php">
							<span><i class="fa fa-users"></i></span>
							<span>Manage Users</span>
						</a>
					</li>
					
					<li>
						<a href="admin_manage_requests.php">
							<span><i class="fab fa-wpforms"></i></span>
							<span>Manage Requests</span>
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
				My Dashboard
			</div>
			
			<div class="main">
            <div class="widget">
					<div class="title">My Details
                    </div>
					<div class="chart">
                    <div class="container">
    <div class="row">
        <?php echo $data; ?> 
            <div class="records_content"></div>
    </div>
                </div>
				</div>
          
				
					
			</div>
            </div>
        </div>
<script> 
var logout = document.getElementById('logout');
logout.addEventListener('click', function() {
  if (confirm("Are you sure you want to log out?")) {
      location.href = "../html/home.html";
} else {
    location.href = "../php/admindashboard.php";
}
});
</script>
</body>


</html>