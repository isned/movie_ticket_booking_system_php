<?php
include '../modele/bookingtable.php';
$bookingtable=new bookingtable();
$bookingtable-> modifier($_POST['bookingID'],$_POST['bookingFName'],$_POST['bookingLName'],$_POST['bookingPNumber'],$_POST['bookingEmail'],$_POST['amount']);
header('Location:index.php');
?>