<?php

require_once('../controllers/usersController.php');
require_once('../models/users.php'); 
require_once('../controllers/clientsController.php');
require_once('../models/clients.php'); 
require('../database/config.php')


$users=new users();
$usersCtr=new usersController();
$clients=new clients();
$clientsCtr=new clientsController();
if (isset($_POST['but_submit'])) {
    $uname = $_POST['txt_uname'];
    $password = $_POST['txt_pwd'];

    if ($uname != "" && $password != "") {
        $countUser = $usersCtr->getUserByUsernameAndPassword($uname, $password);
        $countClients = $clientsCtr->getClientsByUsernameAndPassword($uname, $password);
        if ($countUser > 0) {
           header('Location: admin.php');
        }
        
        
        elseif ($countClients > 0) {
          $resultuser = $usersCtr->authenticateUser($username, $password);
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['id'] = $resultuser['id'] ;
            setcookie('uname', $resultuser['id'], time() + (86400 * 30), '/');
            header('Location: ../index.php');} 
        else {
            echo "Invalid username and password";
        }
    }
}


?>



<?php

/*
session_start();
include 'connection/Database.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="dossier css\test3.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->


    <!-- Icon -->
    <div class="fadeIn first">
      <img src="image\login.png" id="icon" alt="User Icon" />
    </div>


    <!-- Login Form -->
    <form action='./controllers/logincontroller.php' method='POST'>
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
      <input type="password" id="password" class="fadeIn third" name="mot_passe" placeholder="password"><br>
      <button type= 'submit' class="btn btn-primary" name='btn' >Log In</button>
    </form>


    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>


  </div>
</div>


    
</body>
</html>*/