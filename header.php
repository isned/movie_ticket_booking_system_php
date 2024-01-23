  
  <!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        MOVIES
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        </style>
</head>

<?php /*require('controllers/clientsController.php');
$clcr = new clientsController();*/
?>

  <!-- NAV -->
  <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="#" class="logo">
                    <i class='bx bx-movie-play bx-tada main-color'></i>MO<span class="main-color">VI</span>S
                </a>
                <ul class="nav-menu" id="nav-menu">
                         <li>
                         <form method="post" action="search.php">
                         <input type="text" name="search" placeholder="Search..">
                         <input type="submit" name="submit" value="Search"  style="color:white; background-color:#ee0d0d;">
                         </form>
    
                      </li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#home-section-1">Movies</a></li>
                    <li><a href="#sec_mov">Shortly</a></li>

                  <!--  <li> <a href="informations.php">Informations</a></li>
                    <li><a href="contactus.php">About</a></li>-->
                    
                    <?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    //$uname = $_COOKIE['uname'];
    //$str = implode(',',$uname);
    //echo ($str);
    echo '<li><a href="info.php">Info</a></li> <li><a href="logout.php" class="btn btn-hover"><span>Logout</span></a></li>
    <img src="https://www.shareicon.net/data/128x128/2016/05/26/771187_man_512x512.png" alt="avatar"
    class="rounded-circle" style="width: 18px;height: 18px;" />';
} else {
    echo '<li><a href="admin/index.php" class="btn btn-hover"><span>Login</span></a></li>';
}
?>

              
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAV -->