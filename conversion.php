<?php
$sec=$_POST['s'];
$h=floor($sec / 3600);

$min=floor(($sec / 60) % 60);
$seconde=$sec % 60;
if ($h<10)$h='0'.$h;
if ($min<10)$min='0'.$min;
if ($seconde<10)$seconde='0'.$seconde;
/*echo "$h :$min :$seconde";*/
/*afficher dans une alerte*/
echo "<script > alert ('$h :$min :$seconde')</script>"
?>