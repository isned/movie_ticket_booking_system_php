<?php 
    require_once('../controllers/clientsController.php');
    $clientsCtr=new clientsController();
    $clientsCtr->delete_clients($_GET['id']);
    header('Location:clients_page.php');
?>