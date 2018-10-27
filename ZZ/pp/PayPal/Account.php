<?php

include 'Db.php';

class Account {

    private $db;

    public function __construct() {
        $conn = new Db();
        $this->db = $conn->db();
    }

    public function login($username, $password) {
        $query = $this->db->query("SELECT count('id') as total,username,password from signup WHERE (username = '$username' OR email = '$username') LIMIT 1");

        while ($current_user = $query->fetch_assoc()) {
            if ($current_user['total'] == 1 && $this->varify_pass($password, $current_user['password']) === TRUE) {
                $_SESSION['username'] = $current_user['username'];
                $_SESSION['logged_in'] = TRUE;
                header("Location: dashboard.php");
            } else {
                echo "Username & Password is Incorrect";
            }
        }
    }

    public function varify_pass($input_pass, $pass_hash_fromdb) {
        if (password_verify($input_pass, $pass_hash_fromdb)) {
            return TRUE;
        }
    }

    public function signup($uname, $upass, $acti_has, $email, $mobile) {

        //password shasing called
        $secure_hash = $this->own_hash($upass);
        $hashPass = $secure_hash;
        $date = new DateTime();
        $today = $date->format('Y/m/d H:i:s');
        if ($this->db->query("INSERT INTO `signup`(`username`, `email`, `password`,`member_since`,`activation_has`,`activation_time`,`mobile`) VALUES ('$uname','$email','$hashPass','$today','$acti_has','$today','$mobile')")) {
            return TRUE;
        }
    }

    public function user_exist($user) {

        $query = $this->db->query("SELECT username FROM signup WHERE username = '$user'");
        if ($query->num_rows === 1) {
            return true;
        } else {
            return false;
        }
    }

    public function email_exist($email) {

        $query = $this->db->query("SELECT email FROM signup WHERE email = '$email'");
        if ($query->num_rows === 1) {
            return true;
        } else {
            return false;
        }
    }

    public function mobile_exist($mobile) {

        $query = $this->db->query("SELECT mobile FROM signup WHERE mobile = '$mobile'");
        if ($query->num_rows === 1) {
            return true;
        } else {
            return false;
        }
    }

    public function own_hash($input_pass) {

        $secure = password_hash($input_pass, PASSWORD_DEFAULT);
        return $secure;
    }

    public function get_uinfo($username) {
        $query = $this->db->query("SELECT * from signup WHERE username = '$username'  LIMIT 1");
        if ($query->num_rows === 1) {
            while ($current_user = $query->fetch_assoc()) {
                return $current_user;
            }
        }
    }

    public function logout() {
        session_destroy();
        unset($_SESSION['username']);
        unset($_SESSION['is_logged']);
        header("Location:login.php");
    }

}
