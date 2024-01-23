<?php
require_once('../controllers/movietableController.php');
require_once('../models/movietable.php');

$movieImg=$_POST['movieImg'];
$new='img/'.$movieImg;
$movieTitle=$_POST['movieTitle'];
$movieGenre=$_POST['movieGenre'];
$movieDuration=$_POST['movieDuration'];
$movieRelDate=$_POST['movieRelDate'];
$movieDirector=$_POST['movieDirector'];
$movieActors=$_POST['movieActors'];
$mainhall=$_POST['mainhall'];
$viphall=$_POST['viphall'];
$privatehall=$_POST['privatehall'];
$movietable=new movietable($id,$new,$movieTitle,$movieGenre,$movieDuration,$movieRelDate,$movieDirector,$movieActors,$mainhall,$viphall,$privatehall);
$movietableCtr=new movietableController();
$res=$movietableCtr->insert($movietable);
//echo $client->getNcin();

//if($res==true){
//  header('Location:../admin/addmovie.php');
//}
if ($res==true) {
    echo "<script>alert('Sussessfully Submitted');
          window.location.href='../admin/addmovie.php';</script>";
}

?>