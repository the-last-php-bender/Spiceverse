<?php
session_start();
include "../data/functions.php";
$pword = $_POST['pword'];
$cpword = $_POST['cpword'];
$email = $_SESSION['email1'];
if (empty($cpword) || empty($pword)) {
    echo 404;
} else {
    if ($pword !== $cpword) {
        // Password do not match;    
        echo 403;
    } else {
        $user = new User();
        $npword = $user->hash($pword);
        $checking_pass = $user->update_pass($npword, $email);
        if ($checking_pass) {
            echo 200;
        } else {
            echo 500;
        }
    }
};
