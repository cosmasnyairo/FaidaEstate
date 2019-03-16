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
                     <td width="30%"><label>House Number</label></td>  
                     <td width="70%">'.$row["houseNumber"].'</td>  
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
	<title>e-Nyumba | Dashboard </title>
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
						<a href="chairchat.php">
							<span><i class="fa fa-comment-alt"></i></span>
							<span>Chat</span>
						</a>
					</li>
                    
                    <li>
                        <a href="chairannouncements.php">
                            <span><i class="fa fa-comment-alt"></i></span>
                            <span>Announcements</span>
                        </a>
                    </li>

                    <li>
						<a href="chairperson_track_payments.php">
							<span><i class="fas fa-coins"></i></span>
							<span>Estate Finances</span>
						</a>
					</li>

                     <li>
						<a href="chairperson_track_residents.php">
							<span><i class="fas fa-home"></i></span>
							<span>Manage Residents</span>
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
    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalForm" style="float: left;">
                     Contact System Administrator
                     </button>
                </div>
                </div>

          
                
                    
            </div>
            </div>
        </div>
        <!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Contact Form</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Enter your name"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
<script> 
    function submitContactForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $('#inputName').val();
    var email = $('#inputEmail').val();
    var message = $('#inputMessage').val();
    if(name.trim() == '' ){
        alert('Please enter your name.');
        $('#inputName').focus();
        return false;
    }else if(email.trim() == '' ){
        alert('Please enter your email.');
        $('#inputEmail').focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        alert('Please enter valid email.');
        $('#inputEmail').focus();
        return false;
    }else if(message.trim() == '' ){
        alert('Please enter your message.');
        $('#inputMessage').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url:'../php/submit_form.php',
            data:'contactFrmSubmit=1&name='+name+'&email='+email+'&message='+message,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#inputName').val('');
                    $('#inputEmail').val('');
                    $('#inputMessage').val('');
                    $('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}

function readRecords() {
    $.get("../php/chairdashboard.php", {}, function (data, position) {
        $(".records_content").html(data);
    });
} 
var logout = document.getElementById('logout');
logout.addEventListener('click', function() {
  if (confirm("Are you sure you want to log out?")) {
    location.href = "../html/home.html";
} else {
    location.href = "../php/chairdashboard.php";
}
});

</script>
</body>


</html>