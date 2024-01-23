<?php
$code=$_POST['code1'];
$cx=mysqli_connect("localhost","root","");
mysqli_select_db($cx,"info2");

$req1="delete from etudiant where id=$code";
$res1=mysqli_query($cx,$req1);
?>