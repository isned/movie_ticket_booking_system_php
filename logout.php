<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Set the login status to false
$_SESSION['login'] = false;

// Destroy the session.
session_destroy();

// Unset the cookie
setcookie('uname', '', time() - 3600, '/');

// Redirect to the login page
header('Location: ./index.php');
exit;
?>
