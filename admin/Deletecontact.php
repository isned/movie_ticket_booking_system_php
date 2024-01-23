<?php 
    require_once('../controllers/feedbacktableController.php');
    $feedbacktableCtr=new feedbacktableController();
    $feedbacktableCtr->delete_feed($_GET['id']);
    header('Location:contactus.php');
?>