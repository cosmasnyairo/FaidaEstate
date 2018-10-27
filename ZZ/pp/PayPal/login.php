<?php include 'Account.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <style>
            body{
                background: #ccc;
            }
            form{
                max-width: 400px;
                margin: 50px auto;
                background: #fff;
                padding: 40px;
            }

            h2{
                margin-top: 0px;
            }

            input{

                padding: 10px;
                margin: 10px;
            }
        </style>
    </head>
    <body>

        <form action=""  method="post">
            <h2>Account Login</h2>
            <?php $account = new Account(); ?>
            <?php if(isset($_POST['username']) || (isset($_POST['password']))): ?>
            <?php $account->login($_POST['username'], $_POST['password']); ?>
            <?php endif;?>

            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="submit" value="Login">

            <hr> Don't have an account ? <a href="signup.php">Create Account</a>
        </form>

    </body>
</html>
