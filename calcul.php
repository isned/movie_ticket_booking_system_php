<?php
/*$a=5;
$b=3.2;
$c="hello";
$d=true;
echo"la valeur est ".$a;

$t=array(1,"bonjour",3.5);
for ($i=0;$i<count($t);$i++) 
echo  $t[$i]." ";
//les tableaux associatifs
remplissage du tableau 
//$t=array("nom"=>"aa","prenom"=>"bb","age"=>20);
 
//remplissage de tableau
$t["nom"]="aa";
$t["prenom"]="bb";
$t["age"]=22;
foreach (
    $t as $val) echo $val." ";

foreach (
    $t as $cle=> $val) echo " la case d'indice ".$cle."a comme valeur ".$val;
)*/


$a=$_POST['t1'];
$a=$a*$a*$a;
echo $a;
   


?>