<?php include 'Account.php'; ?>
<?php $acc = new Account(); ?>
<?php $user = $acc->get_uinfo($_SESSION['username']); ?>
<?php if (!isset($_SESSION['username']) && !isset($_SESSION['is_logged'])): ?>
    <?php header("Location: login.php"); ?>
<?php endif; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title></title>
        <style>
            body{
                background: #ccc;
            }
            .container{
                max-width: 600px;
                margin: 50px auto;
                background: #fff;
                padding: 20px;
            }

            #okay{
                border: 1px solid #ccc;
                padding: 20px;
                line-height: 20px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <h3>  Hello <?php echo $user['username']; ?>!! 
                <a href="?logout">Logout</a>
                <?php if (isset($_GET['logout'])): ?>
                    <?php $acc->logout(); ?>
                <?php endif; ?>
            </h3><hr>

            <?php if ($user['membership'] == 0): ?>
                <div id="payment-success">
                    <h2 > Upgrade membership - Pay Via </h2>
                    <div id="btn-paypal"></div>
                </div>
            <?php else: ?>
                <div id="okay">
                    <h2 > Membership upgraded !!! </h2>
                    <h3>Now you can enjoy  all video lessons...........</h3>
                </div>

            <?php endif; ?>

        </div>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
        <script src="main.js" type="text/javascript"></script>
    </body>
</html>
