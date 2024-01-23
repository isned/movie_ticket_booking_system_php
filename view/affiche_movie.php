 <?php
require_once('../controllers/movietableController.php');
$us=new movietableController();
$res=$us->liste();

echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
<tr>
                            <th>MovieID</th>
                            <th>MovieTitle</th>
                            <th>Movie_Genre</th>
                            <th>Release_date</th>
                            <th>Director</th>
                            <th>Image</th>
                            <th>More</th>
                            
                        </tr>";
if (is_array($res) || is_object($res)){
foreach ($res as $row)
{
echo 
"<tr>
<td>$row[movieID]</td>
<td>$row[movieTitle]</td>
<td>$row[movieGenre]</td>
<td>$row[movieRelDate]</td>
<td>$row[movieDirector]</td>
<td><img src='$row[movieImg]' width='100' height='100'></td>
<td><button type='submit' type='button' class='btn btn-outline-danger'><a href='deletemovie.php?id=$row[movieID]' >delete</a> </button>
<button name='update'  type='submit' onclick='' type='button' class='btn btn-outline-warning'><a href='editmovie.php?id=$row[movieID]' >update</a> </button></td> </tr>";
;
}}
echo "</table>";

?>                    