<?php
require_once('../controllers/clientsController.php');
$us=new clientsController();
$res=$us->liste();

echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
<tr>
                            <th>Client_ID</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Password</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>More</th>
                        </tr>";
if (is_array($res) || is_object($res)){
foreach ($res as $row)
{
echo 
"<tr>
<td>$row[id]</td>
<td>$row[username]</td>
<td>$row[name]</td>
<td>$row[password]</td>
<td>$row[phone]</td>
<td>$row[email]</td>
<td><button type='submit' type='button' class='btn btn-outline-danger'><a href='deleteclients.php?id=$row[id]' >delete</a> </button>
<button name='update'  type='submit' onclick='' type='button' class='btn btn-outline-warning'><a href='editclients.php?id=$row[id]' >update</a> </button></td> </tr>";
;
}}
echo "</table>";

?>                    