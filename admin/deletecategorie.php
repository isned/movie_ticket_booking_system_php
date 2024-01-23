<?php 
    require_once('../controllers/categorieController.php');
    $categorieCtr=new categorieController();
    $categorieCtr->delete_categorie($_GET['id']);
    header('Location:category.php');
?>