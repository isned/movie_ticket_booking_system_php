<?php
require_once('../controllers/usersController.php');
require_once('../models/users.php');
$usersCtr=new usersController();
$users=new users();

$users->setId($_POST['id']);
$users->setUsername($_POST['username']);
$users->setName($_POST['name']);
$users->setPassword($_POST['password']);


$usersCtr->modifier_users($users);
header('Location:../admin/users_page.php');

?>