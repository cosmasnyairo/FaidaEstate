
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
	<title>e-Nyumba App | Resident Home Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main_dash.css">
    <link rel="icon" type="image/png" href="../Login_v13/images/icons/favicon.ico"/>
	<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	<script src="../javascript/main.js"></script>
    <script src="../javascript/modal.js"></script>
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
							<span><i class="fa fa-user"></i></span>
							<span>Profile</span>
						</a>
					</li>
					<li>
						<a href="../html/chat.html">
							<span><i class="fa fa-envelope"></i></span>
							<span>Chat</span>
						</a>
					</li>
					<li>
						<a href="finances.php">
							<span><i class="fa fa-bank"></i></span>
							<span>Finances</span>
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
					<div class="title">My Details</div>
					<div class="chart">
                    <?php if ($result && $result->num_rows > 0) { // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                      <br/>
                      <article style="font-weight:bold" align="center">  Name: <?php echo $row['name']; ?> </article> <br/>
                      <br/> 
                       <article style="font-weight:bold" align="center"> House Number:  <?php echo $row['houseNumber']; ?> </article> <br/>
                      <br/>
                      <article style="font-weight:bold" align="center"> E-mail Address:  <?php echo $row['email']; ?></article> <br/>
                      <br/>
                      <article style="font-weight:bold" align="center"> Phone Number:  <?php echo $row['phoneNo']; }} ?> </article><br/>
                      <br/>
                    <!-- Trigger/Open The Modal -->
                    <button id="myBtn"></button> 
                </div>
				</div>
				<div class="widget">
					<div class="title">Notices</div>
					<div class="chart"></div>
				</div>	
			</div>
            </div>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
     <form class="login-form" method="post" action="#" >
      
      <p class="message"> Name: </p> <br /> 
      <input type="text" name="name" value=""/ />
      <p class="message"> House Number: </p> <br /> 
      <input type="text" name="houseNumber" value=""/>
      <p class="message"> Email: </p> <br /> 
      <input type="text" name="email" value=""/>
      <p class="message"> Phone Number: </p> <br /> 
      <input type="text" name="phoneNo"  value=""/>
      <p class="message"> Password: </p> <br /> 
      <input type="text" name="password" value=""/>

    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var logout = document.getElementById('logout');
logout.addEventListener('click', function() {
  if (confirm("Are you sure you want to log out?")) {
    location.href = "../html/home.html";
} else {
    location.href = "dashboard.php";
}
});
</script>

</body>
</html>
