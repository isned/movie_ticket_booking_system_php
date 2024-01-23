<?php
require_once('../controllers/bookingtableController.php');
$us=new bookingtableController();
$res=$us->liste();

echo" <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
<tr>
    <th>Booking ID</th>
    <th>Movie ID</th>
   
    <th>Date</th>
    <th>Theatre</th>
    <th>Type</th>
   
</tr>
";
if (is_array($res) || is_object($res)){
    foreach ($res as $row){
        echo" <tr align='center'>
        <td>$row[bookingID]</td>
        <td>$row[movieID]</td>
       
        <td>$row[bookingDate]</td>
        <td>$row[bookingTheatre]</td>
        <td>$row[bookingType]</td>
   
    </tr>";
    
}}

echo "</table>";
?>