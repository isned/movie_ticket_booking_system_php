<?php
require_once('../controllers/movietableController.php');
$us=new movietableController();
$resm=$us->nombremovie();
require_once('../controllers/bookingtableController.php');
$us=new bookingtableController();
$resb=$us->nombrebooking();
require_once('../controllers/feedbacktableController.php');
$us=new feedbacktableController();
$resf=$us->nombrefeed();
require_once('../controllers/usersController.php');
$us=new usersController();
$resu=$us->nombreusers();

echo"
<div class='admin-section-panel admin-section-stats'>
                    <div class='admin-section-stats-panel'>
                        <i class='fa fa-ticket-alt' style='background-color: #cf4545'></i>
                        <h2 style='color: #cf4545'>$resb</h2>
                        <h3>Bookings</h3>
                    </div>
                    <div class='admin-section-stats-panel'>
                        <i class='fas fa-film' style='background-color: #4547cf'></i>
                        <h2 style='color: #4547cf'>$resm</h2>
                        <h3>Movies</h3>
                    </div>
                    <div class='admin-section-stats-panel'>
                        <i class='fas fa-users' style='background-color: #000000'></i>
                        <h2 style='color: #bb3c95'>$resu</h2>
                        <h3>Admins</h3>
                    </div>
                    <div class='admin-section-stats-panel' style='border: none'>
                        <i class='fas fa-envelope' style='background-color: #3cbb6c'></i>
                        <h2 style='color: #3cbb6c'>$resf</h2>
                        <h3>Messages</h3>
                    </div>
                </div>
";

?>