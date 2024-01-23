<?php
require_once('../controllers/clientsController.php');
require_once('../models/clients.php');
$clientsCtr=new clientsController();
$clients=new clients();

$clients->setId($_POST['id']);
$clients->setUsername($_POST['username']);
$clients->setName($_POST['name']);
$clients->setPassword($_POST['password']);
$clients->setPhone($_POST['phone']);
$clients->setEmail($_POST['email']);

$clientsCtr->modifier_clients($clients);
header('Location:../info.php');

?>