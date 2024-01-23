<?php
require_once('../models/categorie.php');
require_once('../controllers/categorieController.php');
$genre=$_POST["genre"] ;

                   
$categorie=new categorie($id,$genre);
$categorieCtr=new categorieController();
$res=$categorieCtr->insert($categorie);
  
if ($res==true) {
    echo "<script>alert('Succesfully Submitted')
    window.location.href='../admin/category.php';</script>"
    
    ;
}


?>