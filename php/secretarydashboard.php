<?php
session_start();
$id = $_SESSION['login_id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM administrator WHERE position = 'Secretary'";
$result = $conn->query($sql);
	?>
<!DOCTYPE html>
<html>
<head>
	<title>e-Nyumba App | Secretary Home Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main_dash.css">
    <link rel="icon" type="image/png" href="../Login_v13/images/icons/favicon.ico"/>
	<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	<script src="../javascript/main.js"></script>
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
					<li class="active">
						<a href="#">
							<span><i class="fas fa-address-card"></i></span>
							<span>Profile</span>
						</a>
					</li>
					<li>
						<a href="../php/index.php">
							<span><i class="fa fa-envelope"></i></span>
							<span>Chat</span>
						</a>
					</li>
					<li>
						<a href="../php/announce.php">
							<span><i class="fa fa-file-alt"></i></span>
							<span>Post Notices</span>
						</a>
					</li>
                    <li>
						<a href="../html/track.html">
							<span><i class="fa fa-upload"></i></span>
							<span>Upload Documents</span>
						</a>
					</li>
                 
                    <li>
						<a id="logout" href="../html/home.html">
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
					<div class="title">My Details</div>
					<div class="chart">
                    <?php if ($result && $result->num_rows > 0) { // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                      <br/>
             
                <article style="font-weight:bold" align="center">  Name: <?php echo $row['name']; ?> </article> <br/>
                      <br/> 
                <article style="font-weight:bold" align="center">  Username: <?php echo $row['username']; ?> </article><br/>
                      <br/> 
                 <article style="font-weight:bold" align="center"> Position: <?php echo $row['position']; ?> </article> <br/>
                      <br/>     
                <article style="font-weight:bold" align="center"> E-mail Address:  <?php echo $row['email']; ?></article> <br/>
                      <br/>
                <article style="font-weight:bold" align="center"> Phone Number:  <?php echo $row['phoneNo']; }} ?> </article><br/>
                      <br/>   
                </div>
                <div class="title" align="center" ><a onClick="logout(); return false;" href="finances.php"> Edit Account Information </a> </div>
				</div>
                
				<div class="widget">
					<div class="title">Notices</div>
					<div class="chart"></div>
				</div>	
			</div>
            </div>
<script> 
var logout = document.getElementById('logout');
logout.addEventListener('click', function() {
  if (confirm("Are you sure you want to log out?")) {
    location.href = "../html/home.html";
} else {
    location.href = "../php/secretarydashboard.php";
}
});
</script>
</body>


</html>