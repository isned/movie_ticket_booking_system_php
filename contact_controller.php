<?php
/*include "connection.php";
                if (isset($_POST['submit'])) {
                    $insert_query = "INSERT INTO 
                        feedbackTable ( senderfName,
                                        senderlName,
                                        sendereMail,
                                        senderfeedback)
                        VALUES (        '" . $_POST["fName"] . "',
                                        '" . $_POST["lName"] . "',
                                        '" . $_POST["eMail"] . "',
                                        '" . $_POST["feedback"] . "')";
                    $add = mysqli_query($con, $insert_query);

                    if ($add) {
                        echo "<script>alert('Succesfully Submitted')
                        window.location.href='contactus.php';</script>";
                    }
                }*/

require_once('feedbacktableController.php');
require_once('feedbacktable.php');
//include "config.php";
$fname=$_POST["fName"] ;
$lname= $_POST["lName"] ;
$mail=$_POST["eMail"] ;
$feed=$_POST["feedback"] ;
               
$feedbacktable=new feedbacktable($id,$fname,$lname,$mail,$feed);
$feedbacktableCtr=new feedbacktableController();
$res=$feedbacktableCtr->insert($feedbacktable);
  
if ($res==true) {
    echo "<script>alert('Succesfully Submitted')
    window.location.href='contactus.php';</script>"
    
    ;
}

                ?>