
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tableau.php" , method="post" >
    code: <input type="text" name="code">
    nom: <input type="text" name="nom">
    prenom:<input type="text" name="prenom">


    <label >Classe:</label>
    <select name="choix">
    <?php
    $cx=mysqli_connect("localhost","root","");
    mysqli_select_db($cx,"info2");
    $req="select * from classe ";
    $result = $cx->query($req);
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        while($row = $result->fetch_assoc()) {
        echo "<option value=".$row['idC'].">".$row['nomC']."</option>";
       
        }
      } else {
        echo "0 results";
      }echo "</table>";
 ?>
</select>
        <input type="submit" value="ajouter">
        <input type="reset" value="annuler">
    </form>
</body>
</html>