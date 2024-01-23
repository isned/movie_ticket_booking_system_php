<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        /* Container */
        .container {
            width: 40%;
            margin: 0 auto;
        }

        /* Login */
        #div_login {
            border: 1px solid gray;
            border-radius: 3px;
            width: 470px;
            height: 270px;
            box-shadow: 0px 2px 2px 0px gray;
            margin: 0 auto;
        }

        #div_login h1 {
            margin-top: 0px;
            font-weight: normal;
            padding: 10px;
            background-color: cornflowerblue;
            color: white;
            font-family: sans-serif;
        }

        #div_login div {
            clear: both;
            margin-top: 10px;
            padding: 5px;
        }

        #div_login .textbox {
            width: 96%;
            padding: 7px;
        }

        #div_login input[type=submit] {
            padding: 7px;
            width: 100px;
            background-color: lightseagreen;
            border: 0px;
            color: white;
        }
    </style>
</head>

<body>
<!--<i class="fa-regular fa-turn-down-left"><a href="../index.php"><click here to return to the main page</a></i>-->
<a href="../index.php">click here to return to the main page</a>
    <div class="container">
        <form method="post" action="">
            <div id="div_login">
                <h1>Login</h1>
                <div>
                  <input type="text" class="textbox" id="txt_uname"  name="txt_uname" placeholder="Username" />
              <!--     <input type="text" class="textbox" id="txt_uname"  name="email" placeholder="Username" />-->
                </div>
                <div>
                   <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password" />
               <!--<input type="password" class="textbox" id="txt_uname" name="mot_passe" placeholder="Password" />-->
                </div>
                <div>
                    <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                </div>
            </div>
        </form>
    </div>
    


</body>

</html>

<?php
/*
include "config.php";

if (isset($_POST['but_submit'])) {

    $uname = mysqli_real_escape_string($con, $_POST['txt_uname']);
    $password = mysqli_real_escape_string($con, $_POST['txt_pwd']);

    if ($uname != "" && $password != "") {

        $sql_query = "select count(*) as cntUser from users where username='" . $uname . "' and password='" . $password . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['uname'] = $uname;
            header('Location: admin.php');
        } else {
            echo "Invalid username and password";
        }
    }
    if ($uname != "" && $password != "") {

        $sql_query = "select count(*) as cntclients from clients where username='" . $uname . "' and password='" . $password . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntclients'];

        if ($count > 0) {
            $_SESSION['uname'] = $uname;
            
            header('Location: client_page.php');
        } else {
            echo "Invalid username and password";
        }
    }
}*/
?>
<?php

require_once('clientsController.php');
require_once('clients.php'); 


$clients=new clients();
$clientsCtr=new clientsController();
if (isset($_POST['but_submit'])) {
    $uname = $_POST['txt_uname'];
    $password = $_POST['txt_pwd'];

    if ($uname != "" && $password != "") {
        $countClients = $clientsCtr->getClientsByUsernameAndPassword($uname, $password);
        if ($countClients > 0) {
            $_SESSION['uname'] = $uname;
           header('Location: booking.php');
        }
        
        
      /*  elseif ($countClients > 0) {
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['uname'] = $uname;
            header('Location: Location: http://localhost/site%20-%20Copie/index.php');} */
        else {
            echo "Invalid username and password";
        }
    }
}
?>
