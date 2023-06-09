<?php
session_start();
include "../data/functions.php";
	$email=$_GET['email'];
	$password=$_GET['pword'];
	if(empty($email)||empty($password)){
		echo 404;
	}else{
	$user=new User();
	$select=$user->login_user();
    $execute=$select->execute([$email]);
    $rowCount=$select->rowCount();;
    if($rowCount>=1){
        $row=$select->fetch();
        $pword=$row['pword'];
        if(password_verify($password,$pword)){
            echo 200;
            $_SESSION['email']=$email;
        }else{
            echo 400;
        }
    }else{
        echo 402;
    }
    }
	
?>