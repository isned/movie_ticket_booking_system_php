<?php
require_once('clientsController.php');
require_once("clients.php");
$us=new clientsController();
$username=$_POST['txt_uname'];
$passwoed=$_POST['txt_pwd'];

$res=$us->getClientsAffiche($username,$password,$phone,$email);
$rows = $res->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    
    echo '<div class="movie-info ">';
    echo '<h3>' . $row['username'] . '</h3>';
    echo '<h3>' . $row['name'] . '</h3>';

    echo '</div>';
}

?>