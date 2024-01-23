<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Update Admins</title>
</head>

<body>


<?php
require_once('../controllers/usersController.php');
$usersCtr=new usersController();
$res=$usersCtr->getUsers($_GET['id']);
?>
<?php

/*
include "config.php";
$id = $_GET['id']; // get id through query string
$setting = "select * from movietable where movieID='$id'";
$qry = mysqli_query($con, $setting); // select query



$data = mysqli_fetch_array($qry); // fetch data

if (isset($_POST['update'])) // when click on Update button
{   $movieImg = $_POST['movieImg'];
    $movieTitle = $_POST['titre'];
    $movieGenre = $_POST['genre'];
    $movieDuration = $_POST['duree'];
    $movieDirector = $_POST['director'];
    $movieActors = $_POST['actor'];
    $mainhall = $_POST['main'];
    $viphall = $_POST['vip'];
    $privatehall = $_POST['private'];
    $movieRelDate = $_POST['date'];

    $edit = mysqli_query($con, "update movietable set movieImg='$movieImg',movieTitle='$movieTitle', movieGenre='$movieGenre',movieDuration='$movieDuration',movieRelDate='$movieRelDate',movieDirector='$movieDirector',movieActors='$movieActors',mainhall='$mainhall',viphall='$viphall',privatehall='$privatehall' where movieID='$id'");

    if ($edit) {
        mysqli_close($con); // Close connection
        header("location:addmovie.php"); // redirects to all records page
        exit;
    } else {
        echo "error";
    }
}*/
?>

    <?php include('header.php'); ?>

    <div class="admin-container">
        <?php include('sidebar.php'); ?>
        <div class="admin-section admin-section2">
            <div class="admin-section-column">


                <div class="admin-section-panel admin-section-panel2">
                    <div class="admin-panel-section-header">
                        <h2>UPDATE ADMINS</h2>
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>
                    <div class="booking-form-container">
                        <form method="POST" action="../view/modification_users.php" enctype="multipart/form-data">
                            
                            
                            <input type="text" name="id" value="<?php echo $res['id'] ?>" Required readonly>
                            <input type="text" name="username" value="<?php echo $res['username'] ?>" Required>
                            <input type="text" name="name" value="<?php echo $res['name'] ?> " Required>
                            <input type="text" name="password" value="<?php echo $res['password'] ?>" Required>
                            
                             <input type="submit" name="update" class="form-btn" value="Update">
                             
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    
</body>

</html>