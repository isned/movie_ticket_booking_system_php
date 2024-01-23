<?php
require_once('../models/feedbacktable.php');
require_once('../controllers/feedbacktableController.php');
$fname=$_POST["fName"] ;
$lname= $_POST["lName"] ;
$mail=$_POST["eMail"] ;
$feed=$_POST["feedback"] ;
                   
$feedbacktable=new feedbacktable($fname,$lname,$mail,$feed);
$feedbacktableCtr=new feedbacktableController();
$res=$feedbacktableCtr->insert($feedbacktable);
  
if ($res==true) {
    echo "<script>alert('Succesfully Submitted')
    window.location.href='contactus.php';</script>"
    
    ;
}


?>