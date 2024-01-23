<?php
require_once('../controllers/categorieController.php');
$us=new categorieController();
$res=$us->liste();

echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
<tr>
                            <th>Category_ID</th>
                            <th>Genre</th>
                            
                        </tr>";
if (is_array($res) || is_object($res)){
foreach ($res as $row)
{
echo 
"<tr>
<td>$row[id]</td>
<td>$row[genre]</td>


<td><button type='submit' type='button' class='btn btn-outline-danger'><a href='deletecategorie.php?id=$row[id]' >delete</a> </button>
<button name='update'  type='submit' onclick='' type='button' class='btn btn-outline-warning'><a href='editcategorie.php?id=$row[id]' >update</a> </button></td> </tr>";
;
}}
echo "</table>";

?>                    