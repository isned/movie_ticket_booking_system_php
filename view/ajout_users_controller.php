<?php
require_once('../controllers/usersController.php');
require_once('../models/users.php');

$username=$_POST['username'];
$name=$_POST['name'];
$password=$_POST['password'];
$users=new users($id,$username,$name,$password);
$usersCtr=new usersController();
$res=$usersCtr->insert($users);
//echo $client->getNcin();

//if($res==true){
//	header('Location:../admin/addmovie.php');
//}
if ($res==true) {
	echo "<script>alert('Sussessfully Submitted');
		  window.location.href='../admin/users_page.php';</script>";
}

?>