<?php
require_once('../controllers/feedbacktableController.php');
$us=new feedbacktableController();
$res=$us->liste();

echo" <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
<tr>
    <th>Message ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Feedback</th>
    <th>More</th>
</tr>";
if (is_array($res) || is_object($res)){
    foreach ($res as $row)
    {
        echo "<tr><td>$row[msgID]</td>
<td>$row[senderfName]</td>
<td>$row[senderlName]</td>
<td>$row[sendereMail]</td>
<td>$row[senderfeedback]</td>
<td><button type='submit 'type='button' class='btn btn-outline-danger'><a href='Deletecontact.php?id=$row[msgID]' >delete</a> </button></td> </tr>";
        
        
        
        
        
        ;}}

        echo "</table>";






?>