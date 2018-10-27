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

$sql = "SELECT * FROM resident";
$result = $conn->query($sql);

$query = "SELECT * FROM new_residents";
$result1 = $conn->query($query);

     
?> 
<!DOCTYPE html>
<html>
<head>
  <title>e-Nyumba App | Resident Payments</title>
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
                        <a href="#">
                            <span><i class="fa fa-comment-alt"></i></span>
                            <span>Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="fa fa-envelope"></i></span>
                            <span>Manage Chat Forums</span>
                        </a>
                    </li>
                    <li>
                        <a href="chairperson_track_payments.php">
                            <span><i class="fas fa-coins"></i></span>
                            <span>Manage Estate Finances</span>
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
                <button class="accordion">All Residents</button>
            <div class="panel">

            <div id="resident_table">  
                          <table class="table table-bordered">  
                               <tr>  
                                    <th>Resident Name</th>
                                    <th>House Number</th>
                                    <th>Email</th>  
                                    <th>Phone Number</th> 
                                    <th>Contact</th> 
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["name"]; ?></td>  
                                    <td><?php echo $row["houseNumber"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["phoneNo"]; ?></td>

     
                                    <td><input type="button" name="contact" value="Contact" id="<?php echo $row["user_id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>  
                     </div> 
             </div>
     <button class="accordion">Pending Residents</button>
            <div class="panel">
           <div id="resident_table">  
                          <table class="table table-bordered">  
                               <tr>  
                                    <th>Resident Name</th>
                                    <th>House Number</th>
                                    <th>Email</th>  
                                    <th>Phone Number</th> 
                                    <th>Verify</th> 
                                    <th>Contact</th>
                               </tr>  
                               <?php  
                               while($row1 = mysqli_fetch_array($result1))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row1["name"]; ?></td>  
                                    <td><?php echo $row1["houseNumber"]; ?></td>
                                    <td><?php echo $row1["email"]; ?></td>
                                    <td><?php echo $row1["phoneNo"]; ?></td>

                                     <td><input type="button" name="verify" value="Verify" id="<?php echo $row["user_id"]; ?>" class="btn btn-success btn-xs view_data" /></td>   
                                    <td><input type="button" name="contact" value="Contact" id="<?php echo $row["user_id"]; ?>" class="btn btn-info btn-xs view_data" /></td> 

                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>  
                     </div> 
                 </div>

     

      </div>
    
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
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