<?php
session_start();

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
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>e-Nyumba App | System Administrator Home Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main_dash.css">
    <link rel="icon" type="image/png" href="../Login_v13/images/icons/favicon.ico"/>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="../javascript/main.js"></script>
    <script type="text/javascript" src="../javascript/resident_script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                        <a href="admindashboard.php">
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
                        <a href="admin_manage_administrators.php">
                            <span><i class="fa fa-user"></i></span>
                            <span>Manage Estate Administrators</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin_manage_requests.php">
                            <span><i class="fab fa-wpforms"></i></span>
                            <span>Manage System Requests</span>
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
                <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
            </div>
        </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="records_content"></div>
        </div>
    </div>
</div>

 <!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="First Name" class="form-control"/>
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
                    <label for="phoneNo">Phone Number</label>
                    <input type="text" id="phoneNo" placeholder="254XXXXXXXXX" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="password">Default Password</label>
                    <input type="text" id="password" placeholder="_House Number-First Name_" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Add Resident</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="update_name" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="houseNumber">House Number</label>
                    <input type="text" id="update_houseNumber" placeholder="House Number" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="phoneNo">Phone Number</label>
                    <input type="text" id="update_phoneNo" placeholder="254XXXXXXXXX" class="form-control"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_residentID">
            </div>
        </div>
    </div>
</div>
</div>
<!-- // Modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"> 
</script>
<script type="text/javascript">
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