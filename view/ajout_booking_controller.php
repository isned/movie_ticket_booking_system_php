
<?php
require_once('../controllers/bookingtableController.php');
require_once('../models/bookingtable.php');
if (isset($_POST['submit'])) {
$fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $email = $_POST['email'];
    $mobile = $_POST['pNumber'];
    $theatre = $_POST['theatre'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $time = $_POST['hour'];
    $movieid = $_POST['movie_id'];
    $amount = $_POST['cash'];
    $order = "cash";
$bookingtable=new bookingtable($movieid, $theatre, $type, $date, $time, $fname, $lname, $mobile,$email, $amount);
$bookingtableCtr=new bookingtableController();
$res=$bookingtableCtr->insert_add($bookingtable);
//echo $client->getNcin();

//if($res==true){
//	header('Location:../admin/addmovie.php');
//}
if ($res==true) {
	echo "<script>alert('Sussessfully Submitted');
		  window.location.href='../admin/add.php';</script>";
}
}
?>

