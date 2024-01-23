<?php
require_once('movietableController.php');
require_once("movietable.php");
$us=new movietableController();

$res=$us->liste();
$rows = $res->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row) {
    echo '<div class="movie-box">';
    echo '<img src="' . $row['movieImg'] . '" alt=" ">';
    echo '<div class="movie-info ">';
    echo '<h3>' . $row['movieTitle'] . '</h3>';
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    echo '<a href="booking.php?id=' . $row['movieID'] . '"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
} else {
    echo '<a href="admin/index.php"><i class="fas fa-sign-in-alt"></i> Login to book a seat</a>';
}
  /*echo'<div class="container">
  <button onclick="showOverlay()">Book a seat </button>
</div>';*/
    echo '</div>';
    echo '</div>';
}


?>