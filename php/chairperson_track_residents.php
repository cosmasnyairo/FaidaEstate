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

$sql = "SELECT * FROM users WHERE position = 'Resident'";
$result = $conn->query($sql);

$query = "SELECT * FROM users WHERE position = 'Not Verified'";
$result1 = $conn->query($query);

     
?> 
<!DOCTYPE html>
<html>
<head>
   <title>e-Nyumba | Estate Residents </title>
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
    
<style>
.accordion {
    border-top-left-radius: 6px;
  border-top-right-radius: 6px;
  background-color: #eef1f7;
  color: #617085;
  font-weight: 600;
  cursor: pointer;
   padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.accordion:active, .accordion:hover {
    background-color: #ccc;
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
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
                        <a href="chairdashboard.php">
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
                            <span><i class="fa fa-envelope"></i></span>
                            <span>Announcements</span>
                        </a>
                    </li>
                    <li>
                        <a href="chairperson_track_payments.php">
                            <span><i class="fas fa-coins"></i></span>
                            <span>Estate Finances</span>
                        </a>
                    </li>
                     <li class="active">
                        <a href="#">
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
        Faida Estate Residents
      </div>
        <div class="col-md-12">
            <div class="residents_content"></div>
        </div>
           
     
          
        <div class="col-md-12">
            <div class="new_residents_content"></div>
        </div>
    
      </div>
    
   <!-- Modals
    - Resident Details
<div class="modal fade" id="user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Contact Resident</h4>
            </div>
            <div class="modal-body">
                <p class="statusMsg"></p>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="username" placeholder="Full Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="houseNumber">House Number</label>
                    <input type="text" id="houseNumber" placeholder="House Number" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" placeholder="Email Address" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Subject</label>
                    <input type="text" id="subject" placeholder="Subject" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" placeholder="Your Message" class="form-control"> </textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id= submitBtn onclick="submitContactForm()">Email</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>


  - Contact Pending Residents Details 
<div class="modal fade" id="contact_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Contact Pending Resident </h4>
            </div>
            <div class="modal-body">
                <p class="statusMsg"></p>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="full-name" placeholder="Full Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="houseNumber">House Number</label>
                    <input type="text" id="house-number" placeholder="House Number" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="E-mail" placeholder="Email Address" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Subject</label>
                    <input type="text" id="Subject" placeholder="Subject" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="Message" placeholder="Your Message" class="form-control"> </textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id= submitBtn onclick="submitPendingContactForm()">Email</button>
                <input type="hidden" id="hidden_pending_id">
            </div>
        </div>
    </div>
</div> 

 //Modals -->
<script type="text/javascript" src= "../javascript/resident_script.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"> 
</script>
<script type="text/javascript">
   
function submitContactForm(){
   
    var subject = $('#subject').val();
    var email = $('#e-mail').val();
    var message = $('#message').val();
    if(subject.trim() == '' ){
        alert('Please enter the subject.');
        $('#subject').focus();
        return false;
    }else if(message.trim() == '' ){
        alert('Please enter your message.');
        $('#message').focus();
        return false;
    }
    else{
         $.post("../mail/sendEmail.php", {
            subject:subject,
            email: email,
            message: message
        },
        function (data, status) {
            if(status == 'ok'){
                    $('#subject').val('');
                    $('#message').val('');
                    $('.statusMsg').html('<span style="color:green;">Your Message has been Sent.</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
        }
    );
}
 }

function submitPendingContactForm(){
   
    var subject = $('#Subject').val();
    var email = $('#E-mail').val();
    var message = $('#Message').val();
    if(subject.trim() == '' ){
        alert('Please enter the subject.');
        $('#subject').focus();
        return false;
    }else if(message.trim() == '' ){
        alert('Please enter your message.');
        $('#message').focus();
        return false;
  }else{
         $.post("../mail/sendEmail.php", {
            subject:subject,
            email: email,
            message: message
        },
        function (data, status) {
            if(status == 'ok'){
                    $('#subject').val('');
                    $('#message').val('');
                    $('.statusMsg').html('<span style="color:green;">Your Message has been Sent.</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
        }
    );
}
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