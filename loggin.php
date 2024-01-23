<!DOCTYPE html>
<html lang="en">

<head>
    <?php //require_once("header.php"); ?>
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
            color: white;}
        #div_login input[type=button] {
            padding: 7px;
            width: 100px;
            background-color: lightseagreen;
            border: 0px;
            color: white;
        
        }
    </style>
    <script>
    function clearTextboxes() {
        var textboxes = document.getElementsByClassName("textbox");
        for (var i = 0; i < textboxes.length; i++) {
            textboxes[i].value = '';
        }
    }
</script>
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
                    <input type="button" value="Cancel" onclick="clearTextboxes();"> <br>
                   <a href="../register.php">Create an account</a>

                </div>
            </div>
        </form>
    </div>
    


</body>

</html>

<?php

include "./admin/config.php";

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
            $sql_query1 = "select * from clients where username='" . $uname . "' and password='" . $password . "'";
            $result1 = mysqli_query($con, $sql_query1);
            $row1 = mysqli_fetch_array($result1);


            $_SESSION['login']=true;
            $_SESSION['uname'] = $row1['id'];
            setcookie('uname', '1', time() + (86400 * 30), '/'); 
            header('Location: index.php?id=' . $row1['id']);

        } else {
            echo "Invalid username and password";
        }
    }
}
?>


<?php /*
include_once "../controllers/utilisateur_controller.php";
include "../models/utilisateur.php";
if (isset($_POST['but_submit'])) {
    $email= addslashes(strip_tags($_POST['email'])) ;
    $mot_passe= addslashes(strip_tags($_POST['mot_passe']));
    
  
    if (!empty($email) and !empty($mot_passe)){
        
        $utilisateur_controller = new Utilisateur_controller();
        $login=$utilisateur_controller->login($email,$mot_passe);
        if ($login->rowCount()) {
            session_start();
            $data = $login->fetch();
            $_SESSION['id_utilisateur']=$data['id_utilisateur'];
            $_SESSION['types']=$data['types'];
            if($_SESSION['types'] == 'admin') {
               // header('Location: admin.php');
            //   header('Location: admin_page.php');
            echo"hello";
            } else {
                header('Location: client_page.php');
            }
        }
        else{
            echo "Mauvais identifiants";
        }
    }
}*/
?>
