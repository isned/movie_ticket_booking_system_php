<?php
require_once('../controllers/usersController.php');
$us=new usersController();
$res=$us->liste();

echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
<tr>
                            <th>Admin_ID</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Password</th>
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

<td><button type='submit' type='button' class='btn btn-outline-danger'><a href='deleteusers.php?id=$row[id]' >delete</a> </button>
<button name='update'  type='submit' onclick='' type='button' class='btn btn-outline-warning'><a href='editusers.php?id=$row[id]' >update</a> </button></td> </tr>";
;
}}
echo "</table>";

?>                    