<?php include 'Account.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Signup</title>
        <style>
            body{
                background: #ccc;
            }
            form{

                max-width: 500px;
                margin: 50px auto;
                background: #fff;
                padding: 40px;
            }

            h2{
                margin-top: 0px;
            }

            input{

                padding: 10px 30px 10px 10px;;
                margin: 10px;
            }
            .error{
              
                color: red;
            }
        </style>
    </head>
    <body>

        <form action=""  method="post">
            <h2>Account Signup</h2>
            <?php $account = new Account(); ?>
            <?php if (isset($_POST['submit'])): ?>
                <?php if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['mobile'])): ?>
                    <p class="error">All the fields are required</p>
                <?php elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)): ?>
                    <p class="error">Please Enter Valid Email</p>

                <?php elseif ($account->email_exist($_POST['email'])): ?>
                    <p class="error">Email <?php echo $_POST['email']; ?> is already exist</p>

                <?php elseif ($account->user_exist($_POST['username'])): ?>
                    <p class="error">Username <?php echo $_POST['username']; ?> is already exist</p>


                <?php elseif ($account->mobile_exist($_POST['mobile'])): ?>
                    <p class="error">Mobile <?php echo $_POST['mobile']; ?> someone already registered</p>


                <?php else: ?>
                 
                 
                    
                    <?php if ($account->signup(strip_tags($_POST['username']), strip_tags($_POST['password']), str_replace(array('.', '/', '$'), '', password_hash($_POST['username'], PASSWORD_DEFAULT)), strip_tags($_POST['email']), strip_tags($_POST['mobile']))): ?>
                        <p>
                            Thanks <b><?php echo $_POST['username']; ?></b>, Registraion Successfull !!
                            <a href="login.php">Login your account</a>
                        </p>
                        <style>
                            .fold{
                                display: none;
                            }
                        </style>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
            <div class="fold">
                <input type="text" name="username" id="username" placeholder="Username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>">
                <input type="email" name="email" id="email" placeholder="Enter Email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>">
                <input type="text" name="mobile" id="mobile" placeholder="Mobile" value="<?php if(isset($_POST['mobile'])){echo $_POST['mobile'];}?>">eg. +91xxxxxxxxxx
                <input type="password" name="password" id="password" placeholder="Create Password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];}?>">
                <input type="submit" value="Signup" name="submit">
                <hr> Already have an account ? <a href="login.php">Login</a> 
            </div>
        </form>

    </body>
</html>
