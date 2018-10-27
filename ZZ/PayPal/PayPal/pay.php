<?php

include './PayPalExpress.php';
//create object of PayPalExpress
$payment = new PayPalExpress();

if (isset($_SESSION['username']) && isset($_SESSION['logged_in'])) {

    if ($_POST['tid'] != NULL && $_POST['state'] != NULL) {

        $amount = 10.21;
        //validate these 
        $tid = $_POST['tid'];
        $state = $_POST['state'];
        $username = $_SESSION['username'];

        if ($payment->pay($username, $tid, $amount, $state) == TRUE) {
            $payment->update_membership($username);
            //send invoice to user via email or generate invoice
             echo "success";
        }
    } else {
        //sorrry if you are gettting errors you can contact at krishna@rathor.me
    }
} else {
    //if user not login redict to the login page
    header("Location: login.php");
}


