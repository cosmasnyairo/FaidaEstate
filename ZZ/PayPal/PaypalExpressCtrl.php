<?php

class PaypalExpressCtrl extends CI_Controller {

    private $username;

    public function __construct() {
        parent::__construct();
        $this->load->model('PayPalExpressModel', 'PayPal');
        $this->username = $this->session->userdata('username');
    }

    public function pay() {
        
        
        if ($this->session->userdata('username') != NULL && $this->session->userdata('logged_in') == TRUE) {
             
            
          
            
            if ($this->input->post('tid') != NULL && $this->input->post('state') != NULL) {
                 
                $this->form_validation->set_rules('tid', 'transaction id', 'trim|required');
                $this->form_validation->set_rules('state', 'state', 'trim|xss_clean|required');
                if ($this->form_validation->run() == FALSE) {
                    //show some error messasge to the user
                   
                } else {
                    $amount = 20;
                    $tid = $this->input->post('tid');
                    $state = $this->input->post('state');
                    $username = $this->username;
                   
                   
                    if ($this->PayPal->pay($username, $tid, $amount, $state) == TRUE) {
                        $this->PayPal->update_membership($this->username);
                        //send email to the user
                        echo "success";
                    }
                }
            } else {
                //sorrry if you are gettting errors you can contact at questins@krishnarthor.com
            }
        } else {
            header('Location:' . base_url());
        }
    }

}
