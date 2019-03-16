<?php

include('database_connection.php');

session_start();

$message = '';
if(isset($_POST["login"]))
{
 $query = "SELECT * FROM users WHERE email = :email ";
 $statement = $connect->prepare($query);
 $statement->execute(
    array(
      ':email' => $_POST["email"]
     )
  );
  $count = $statement->rowCount();
  if($count > 0)
  {
  $result = $statement->fetchAll();
    foreach($result as $row)
    {
      $hashed_password = $row['password'];
      if(password_verify($_POST["password"], '".$hashed_password."'))
      {
        $_SESSION['Position'] = $row['Position'];
        $_SESSION['login_id'] = $row[0];
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];

        $sub_query = "INSERT INTO login_details (user_id) VALUES ('".$row['user_id']."')";
        $statement = $connect->prepare($sub_query);
        $statement->execute();
        $_SESSION['login_details_id'] = $connect->lastInsertId();

$Position = $_SESSION['Position'];
echo $Position;

switch ($Position) 
{
    case 'Chairperson':
    header('location:chairdashboard.php');
     die();
    break;

    //case 'Not Verified':
    //header('location:home.html');
    //die();
    //break;

    case 'Treasurer':
    header('location:treasurerdashboard.php');
     die();
    break;
    
    case 'Secretary':
    header('location:secretarydashboard.php');
     die();
    break;
    
    case 'Administrator':
    header('location:admindashboard.php');
     die();
    break;

    case 'Resident':
    header('location:dashboard.php');
     die();
    break;

        // header("location:dashboard.php");
  }  
}
elseif ($row ['Position'] == 'Not Verified') {
  $message = "<label>Your Account has not been verified yet. <br /> Contact the Chairperson for Verification.</label>"; }

else{
  $message = "<label>Wrong Password entered. <br /> Please try again. </label>"; }
}
}

else{
  $message = "<label>Wrong E-mail Address entered. <br /> Please try again.</label>"; }
}
?>

<!-- <html>  
    <head>  
        <title>Chat Application using PHP Ajax Jquery</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
   <br />
   
   <h3 align="center"></a></h3><br />
   <br />
   <div class="panel panel-default">
      <div class="panel-heading">Chat Application Login</div>
    <div class="panel-body">
     <form method="post">
      <p class="text-danger"><?php echo $message; ?></p>
      <div class="form-group">
       <label>Enter Username</label>
       <input type="text" name="username" class="form-control" required />
      </div>
      <div class="form-group">
       <label>Enter Password</label>
       <input type="password" name="password" class="form-control" required />
      </div>
      <div class="form-group">
       <input type="submit" name="login" class="btn btn-info" value="Login" />
      </div>
     </form>
    </div>
   </div>
  </div>
    </body>  
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <title>eNyumba | Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../Login_v13/images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="../Login_v13/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Login_v13/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../Login_v13/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="../Login_v13/fonts/iconic/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="../Login_v13/vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="../Login_v13/vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="../Login_v13/vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="../Login_v13/vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="../Login_v13/vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="../Login_v13/css/util.css">
    <link rel="stylesheet" type="text/css" href="../Login_v13/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
</head>
<body style="background-color: #999999;">
  
  <div class="limiter">
    <div class="container-login100">
      <div class="login100-more" style="background-image: url(../images/family2.jpeg);"></div>

      <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
        <form class="login100-form validate-form"  method="post" >
          <span class="login100-form-title p-b-59">
            Sign In
          </span>

          <p class="text-danger"><?php echo $message; ?></p>

          <div class="wrap-input100 validate-input" data-validate="Email Address is required">
            <span class="label-input100">Email Address</span>
            <input class="input100" type="text" name="email" placeholder="jane.doe@email.com">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="*************">
            <span class="focus-input100"></span>
          </div>


          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn" name="login" value="LOG IN">
        Log In </button>
            </div>
                        

            <a href="register.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
              I don't have an account yet.
              <i class="fa fa-long-arrow-right m-l-5"></i>
            </a>
            <a href="../mail/forgotpassword.html" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
              Forgot Password?
              <i class="fa fa-long-arrow-right m-l-5"></i>
            </a>
                                    
            <a href="../html/home.html" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
              Back to Home Page </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <script src="../Login_v13/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="../Login_v13/vendor/animsition/js/animsition.min.js"></script>
  <script src="../Login_v13/vendor/bootstrap/js/popper.js"></script>
  <script src="../Login_v13/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../Login_v13/vendor/select2/select2.min.js"></script>
  <script src="../Login_v13/vendor/daterangepicker/moment.min.js"></script>
  <script src="../Login_v13/vendor/daterangepicker/daterangepicker.js"></script>
  <script src="../Login_v13/vendor/countdowntime/countdowntime.js"></script>
  <script src="../Login_v13/js/main.js"></script>

</body>
</html>




<!-- 

 <form method="post">
      <p class="text-danger"><?php echo $message; ?></p>
      <div class="form-group">
       <label>Enter Username</label>
       <input type="text" name="username" class="form-control" required />
      </div>
      <div class="form-group">
       <label>Enter Password</label>
       <input type="password" name="password" class="form-control" required />
      </div>
      <div class="form-group">
       <input type="submit" name="login" class="btn btn-info" value="Login" />
      </div>
     </form>

 -->
