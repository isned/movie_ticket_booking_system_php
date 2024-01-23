<?php  
$cx=mysqli_connect("localhost","root","");
mysqli_select_db($cx,"info2");

$req="select * from etudiant";
$result = $cx->query($req);
echo "<table border='1'>";
if ($result->num_rows > 0) {
    
  
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>code</td><td>" . $row["id"]. "</td></tr>"."<br>"."<tr><td>nom</td><td>" . $row["nom"] ."</td></tr>". "<br>" ."<tr><td>prenom</td><td>". $row["prenom"]."</td></tr>". "<br>";
  }
} else {
  echo "0 results";
}echo "</table>";
?>