<?php
require_once('../controllers/bookingtableController.php');
$us=new bookingtableController();
$res=$us->liste();

echo"<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
<tr>
<th>Booking ID</th>
<th>Movie ID</th>

<th>Date</th>
<th>Theatre & Type</th>
<th>Time</th>
<th>Client_ID</th>
<th>More</th>
</tr>
";
if (is_array($res) || is_object($res)){
    foreach ($res as $row){
        echo" <tr align='center'>
        <td>$row[bookingID]</td>
        <td>$row[movieID]</td>
        
        <td>$row[bookingDate]</td>
        <td>$row[bookingTheatre] $row[bookingType]</td>
      
        <td>$row[bookingTime]</td>
         <td>$row[id_Client]</td>
        
        <td><button type='submit' type='button' class='btn btn-outline-danger'><a href='deletebooking.php?id=$row[bookingID]' >delete</a> </button>
<!--<button value='Book Now!' type='submit' onclick='' type='button' class='btn btn-danger'><a href='editbooking.php?id=$row[bookingID]' >update</a> </button> --></td> </tr>";
 
}}

echo "</table>";
?>