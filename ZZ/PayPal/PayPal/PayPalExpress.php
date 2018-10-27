<?php

include 'Db.php';

class PayPalExpress {

    private $db;

    public function __construct() {
        $conn = new Db();
        $this->db = $conn->db();
    }

    public function pay($username, $tid, $amount, $state) {
        $date = new DateTime();
        if ($this->check_txt_id($tid) == 0) {
            $tdate = $this->member_since = $date->format('Y/m/d H:i:s');
            $this->db->query("INSERT INTO `membership`(`username`, `tr_id`, `amount`, `state`, `tra_date` ) VALUES( '$username', '$tid', '$amount', '$state', '$tdate' )");
            return TRUE;
        } else {
            //payment already done ,if payment has been deducted you will get refund 
        }
    }

    public function check_txt_id($tid) {
        $query = $this->db->query("SELECT COUNT(id) as total FROM membership WHERE tr_id = '$tid'");
      
         if ($query->num_rows === 1) {
            while ($total = $query->fetch_assoc()) {
                return $total['total'];
            }
        }
        
    }

    public function update_membership($username) {
        $this->db->query("UPDATE signup SET membership = '1' WHERE username = '$username'");
    }

}
