
<?php 
    require_once('../controllers/bookingtableController.php');
    $bookingtableCtr=new bookingtableController();
    $bookingtableCtr->delete_booking($_GET['id']);
    header('Location:view.php');
?>