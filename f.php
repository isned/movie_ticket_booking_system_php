<?php 
$civ=$_POST['r1'];
$nom=$_POST['name'];
$pr=$_POST['prenom'];
$cl=$_POST['classe'];
$ch=$_POST['choix'];
$com=$_POST['com'];
echo "<table border='1'>";
echo "<tr><td>civilité</td><td>".
$civ."</td></tr>";
echo "<tr><td>nom</td><td>".
$nom."</tr></td>";
echo "<tr><td>prenom</td><td>".
$pr."</tr></td>";
echo "<tr><td>classe</td><td>".
$cl."</tr></td>";


echo "<tr><td>option</td><td>";
for($i =0;$i<count($ch);$i ++){
    echo $ch[$i]."<br>";
} 
echo "</td></tr>";


echo "<tr><td>commentaire</td><td>".
$com."</tr></td>";
echo "</table>";


?>