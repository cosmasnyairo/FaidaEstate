  <?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $database = "estate";
  session_start();

  if(!isset($_SESSION['user_id']))
  {
   header('location:login.php');
  }
  if($_SESSION['username']!="cosmas")
  {
   header('location:userannouncements.php');
  }
  ?>  


  <html>
  <head>
    <title>Announcements</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main_dash.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">  
    <link rel="stylesheet" type="text/css" href="../css/announcements.css"> 

     <script type="text/javascript" src="../javascript/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="../javascript/bootstrap.min.js"></script>
      <script type="text/javascript" src="../javascript/bootstrap-select.min.js"></script>
      <script type="text/javascript" src="../javascript/jquery.yacal.min.js"></script> 

  </head>
  <body>

    <div class="header">
        <div class="logo">
          <i class="fa fa-comments"></i>
          <span>FAIDA ESTATE</span>   
        </div>

        <a href="#" class="nav-trigger"><span></span></a>
         <p align="center" style="margin-top: 15px; margin-right: 60px; text-align: right; color: black; font-weight: bold; ">Welcome, <?php echo $_SESSION['username']; ?></p>

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
              <a href="index.php">

                <span><i class="fa fa-envelope"></i></span>
                <span>Chat</span>
              </a>
            </li>
            
            <li class="active">
              <a href="announcements.php">

                <span><i class="fa fa-envelope"></i></span>
                <span>Announcements</span>
              </a>
            </li>
            
            <li>
              <a href="logout.php">
                <span><i class="glyphicon glyphicon-log-out"></i></span>
                <span>Logout</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="main-content">

        <div class="container-fluid">

        <div class="announcement_page">
          <div class="row row-adjusted">

          </div>
        </div>


      <div class="right-page">
        <br>
        <div style="text-align:center">
        <span style="text-align:center;font-weight:bold">POST ANNOUNCEMENT</span>
        <hr>
      </div>

      <form method="post" action="">
        <div class="form-group">
             <label for="txt_title" class="msg_title">Message Title</label>
             <input type="text" class="txt_title form-control form-control-adjusted" id="txt_title" placeholder="Enter message title">
        </div>
      <div class="form-group">
        <label for="txt_announcement" class="msg_title">Message </label>
        <textarea  class="form-control" id="txt_announcement" placeholder="Enter announcement here"></textarea>
      </div>
      <div class="form-group" id="btn_holder">
      <button class="btn btn-primary" id="btn_post">Post</button>
      </div>
    </form>

      </div>
      </div>
    </div>
      </body>  
  </html>   
  <script>
    $(document).ready(function(){

        setInterval(function(){
       $(".row-adjusted").load("get_announcements.php").fadeIn("slow");
     },500);

       $("#btn_post").click(function(){
         var title_holder = $("#txt_title").val();
         var message_holder = $("#txt_announcement").val();
         $.ajax({
           method:"POST",
           url:"",
          data:{"title":title_holder,
            "message":message_holder},  
          success:function(status){
            $(".row-adjusted").load("get_announcements.php").fadeIn("slow");
              }
         });
       });
         });
  </script>

  <?php
  error_reporting(0);
  $host = "localhost";
  $user = "root";
  $pass = "";
  $database = "estate";
  session_start();

  if(!isset($_SESSION['user_id']))
  {
   header('location:login.php');
  }
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "estate";

    $connection_String = mysqli_connect($host,$user,$pass,$database);
     $message_title = $_POST["title"];
     $message_body = $_POST["message"];
     $message_sender = $_SESSION['username'];;

      if($message_title!=""&& $message_body!=""){

        $insert_query_command = "INSERT INTO general_announcement (`id`, `message_title`, `message_body`, `sender`, `date`) VALUES (NULL, '$message_title', '$message_body', '$message_sender', CURRENT_TIMESTAMP)";
        $execute_insert_query = mysqli_query($connection_String,$insert_query_command);
      }
      
    ?>
   