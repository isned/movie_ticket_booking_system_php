<?php
include '../modele/bookingtable.php';
$bookingtable=new bookingtable();
$res=$bookingtable->getuser($_GET['id']);
$row =$res->fetch() ;
?>
<form name = 'f1' method='post' action='mod_booking.php'>
<table >
<tr>
<td>id booking</td>
<td><input type = "text" name = "bookingID" value = "<?php echo $row['bookingID'] ?>"/></td></tr>
<tr><td>Nom </td>
<td><input type = "text" name = "bookingFName" value = "<?php echo $row['bookingFName'] ?>"/></td></tr>
<tr><td>prenom</td>
<td><input type = "text" name = "bookingLName" value = "<?php echo $row['bookingLName'] ?>"/></td></tr>
<td>number</td>
<td><input type = "text" name = "bookingPNumber" value = "<?php echo $row['bookingPNumber'] ?>"/></td></tr>
<tr><td>email </td>
<td><input type = "text" name = "bookingEmail" value = "<?php echo $row['bookingEmail'] ?>"/></td></tr>
<td>amount</td>
<td><input type = "text" name = "amount" value = "<?php echo $row['amount'] ?>"/></td></tr>

<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table></form>