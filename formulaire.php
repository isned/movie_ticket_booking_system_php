<?php  include('tableau.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="tableau.php">
<label >Classe:</label>
<select name="choix">
    <?php
    
    for ($i=0;$i<count($t);$i++)
    echo "<option value=".$t[$i].">".$t[$i]."</option>";
 ?>
</select>
</form>
</body>
</html>


