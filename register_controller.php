<?php

require_once('clientsController.php');
require_once('clients.php'); 

$username=$_POST['txt_uname'];
$name=$_POST['name'];
$password=$_POST['txt_pwd'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$clients=new clients($id,$username,$name,$password,$phone,$email);
$clientsCtr=new clientsController();
$res=$clientsCtr->insert($clients);

if ($res==true) {
	echo "<script>alert('Sussessfully Submitted');
		  window.location.href='register.php';</script>";
}


?>
