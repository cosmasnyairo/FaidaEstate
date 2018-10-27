<?php
//Include DB configuration file
include 'dbConfig.php';

//Set useful variables for paypal form
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'vikiruallan12@gmail.com'; //Business Email

?>
<?php
    //Fetch products from the database
    $results = $db->query("SELECT * FROM statement");
    while($row = $results->fetch_assoc()){
?>
    
    Month of Subscription : <?php echo $row['month']; ?>
    Total Amount: <?php echo $row['total']; ?>
    <form action="<?php echo $paypalURL; ?>" method="post">
        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $row['month']; ?>">
        <input type="hidden" name="item_number" value="<?php echo $row['month']; ?>">
        <input type="hidden" name="amount" value="<?php echo $row['total']; ?>">
        <input type="hidden" name="currency_code" value="KES">
        
        <!-- Specify URLs -->
        <input type='hidden' name='notify_url' value='http://localhost/estate/php/ipn.php'>
        <input type='hidden' name='cancel_return' value='http://localhost/estate/php/cancel.php'>
        <input type='hidden' name='return' value='http://localhost/estate/php/success.php'>
        
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    </form>
<?php } ?>