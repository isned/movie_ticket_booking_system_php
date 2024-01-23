<?php
require_once('../controllers/movietableController.php');
$us=new movietableController();
$res=$us->getMovieByID($movieID);

?>