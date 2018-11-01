<?php
include('dbconnection.php');

session_start();

$message = '';

if(isset($_SESSION['user_id']))
{
 header('location:dashboard.php');
}

if(isset($_POST["login"]))
{
 $query = "
   SELECT * FROM users WHERE houseNumber = :username";
 $statement = $connect->prepare($query);
 $statement->execute(
    array(
      ':username' => $_POST["username"]
     )
  );
  $count = $statement->rowCount();
  if($count > 0)
 {
  $result = $statement->fetchAll();
    foreach($result as $row)
    {
      if($_POST["pass"]== $row["password"])
      {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $sub_query = "INSERT INTO resident_details (user_id) VALUES ('".$row['user_id']."')";
        $statement = $connect->prepare($sub_query);
        $statement->execute();
        $_SESSION['login_details_id'] = $connect->lastInsertId();
         $q = "UPDATE `resident_details` SET `status` = 'offline' WHERE `user_id` = '".$_SESSION['user_id']."'";
         $statement = $connect->prepare($q);
         $statement->execute();
         $_SESSION['login_id'] = $row[0];
        echo '<script language="javascript">';
        echo 'alert("Welcome!")';
        echo '</script>';
        echo "<script>location.href='dashboard.php';</script>";
      }
      else
      { 
       echo '<script language="javascript">';
                echo 'alert("Wrong Login Information. Please Try Again.")';
                echo '</script>';
        echo "<script>location.href='../html/login.html';</script>";
      }
    }
 }
 else
 {
  $message = "<label>Wrong Username</label>";
  echo '<script language="javascript">';
                echo 'alert("Wrong Login Information. Please Try Again.")';
                echo '</script>';
        echo "<script>location.href='../html/login.html';</script>";
 }
}

?>
<!-- 
<html>  
    <head>  
        <title></title>  
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
      <div class="panel-heading">Login</div>
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
       <input type="submit" name="login" class="btn btn-info" value="Login" /> &nbsp &nbsp &nbsp &nbsp
       <a href="../mail/forgotpassword.php">Forgot Password?</a>  
      
      </div>

     </form>
    </div>
   </div>
  </div>
    </body>  
</html>

 -->