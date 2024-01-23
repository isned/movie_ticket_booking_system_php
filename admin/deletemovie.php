<?php 
    require_once('../controllers/movietableController.php');
    $movietableCtr=new movietableController();
    $movietableCtr->delete_movie($_GET['id']);
    header('Location:addmovie.php');
?>