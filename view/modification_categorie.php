<?php
require_once('../controllers/categorieController.php');
require_once('../models/categorie.php');
$categorieCtr=new categorieController();
$categorie=new categorie();

$categorie->setId($_POST['id']);
$categorie->setGenre($_POST['genre']);



$categorieCtr->modifier_categorie($categorie);
header('Location:../admin/category.php');

?>