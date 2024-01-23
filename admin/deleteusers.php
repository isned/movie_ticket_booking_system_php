<?php 
    require_once('../controllers/usersController.php');
    $usersCtr=new usersController();
    $usersCtr->delete_users($_GET['id']);
    header('Location:users_page.php');
?>