<?php
// Remember using sha1 here dont forget 
session_start();
include "../data/functions.php";
	$firstName=$_GET['fname'];
	$lastName=$_GET['lname'];
	$spice_name=$_GET['spice'];
	$email=$_GET['email'];
	$price=$_GET['price'];
	$pword=$_GET['pword'];
	if(empty($firstName)||empty($lastName)||empty($spice_name)||empty($email)||empty($price)||empty($pword)){
		echo 404;
	}else{
	$user=new User();
	$select2=$user->login_user();
    $execute1=$select2->execute([$email]);
    $rowCountEmail=$select2->rowCount();
		if($rowCountEmail>=1){
			// Email Already exist
			echo 401;
		}else{
	$hashing=$user->hash($pword);
	$insert=$user->insert_user($firstName,$lastName,$spice_name,$email,$price,$hashing);
	if($insert){
		echo 200;
		$_SESSION['email']=$email;
	}else{
		echo 500;
	}
	}
}
	?>
