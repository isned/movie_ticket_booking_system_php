<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Contact Us</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="icon" type="image/png" href="../img/logo.png">

    <!--<script src="_.js "></script>-->
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href="style.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
</head>

<body>

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
                    <li><a href="#sec_mov">Movies</a></li>
                    <li><a href="#sec_ser">Shortly</a></li>
                <!--    <li> <a href="informations.php">Informations</a></li>
                    <li><a href="contactus.php">About</a></li>
-->
                    <li>
                        <a href="admin/index.php" class="btn btn-hover" >
                            <span>Login</span>
                        </a>
                    </li>
                    <!-- <li>
                        <form>
                          <input type="search" placeholder="Search">
                          <button type="submit">Search</button>
                        </form>
                      </li>-->
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>
   
    
    <div class="contact-us-container">
        <div class="contact-us-section contact-us-section1">
            <h1 style='color:black'>Contact</h1>
            <p style='color:black'>Feel Free to Contact Us </p>
            <form action="contact_controller.php" method="POST">
                <input placeholder="First Name" name="fName" required style='background-color:black'> <br>
                <input placeholder="Last Name" name="lName" style='background-color:black'><br>
                <input placeholder="E-mail Address" name="eMail" required style='background-color:black'><br>
                <textarea placeholder="Enter your message !" name="feedback" rows="10" cols="30" required style='background-color:black'></textarea><br>
                <button type="submit" name="submit" value="submit" style='background-color:#d91b0d'>Send your Message</button>
                
            </form>

        </div>
        <div class="contact-us-section contact-us-section2">
            <h1 style='color:black'>Address & Info</h1>
            <h3 style='color:black'>Phone Numbers</h3>
            <p style='color:black'><a href="tel:01011391148">+216 72589632 </a><br>
                <a href="tel:01011391148">+216 72548120</a></p>
            <h3 style='color:black'>Address</h3>
            <p style='color:black'>Avenue Hbib Bourguiba , El Jarra, Nabeul</p>
            <h3 style='color:black'>E-mail</h3>
            <p style='color:black'><a href="mailto:MoviesReservation@bue.edu.eg" >MoviesReservation@gmail.com</a></p>
        </div>
    </div>
  <!--  <div style="width: 75%; height: 350px; margin: 15%;">
        <div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=BUE&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>-->
   <!-- <footer></footer>-->
   <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>


    
     
    <!-- FOOTER SECTION -->
    <footer class="section">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="content">
                        <a href="#" class="logo">
                            <i class='bx bx-movie-play bx-tada main-color'></i>MO<span class="main-color">VI</span>S
                        </a>
                        <p>
                           Book and  Watch unlimited movies at site web movies.
                        </p>
                        <div class="social-list">
                            <a href="#" class="social-item">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>MOVIS</b></p>
                                <ul class="footer-menu">
                                  <li><a href="informations.php">About us</a></li>
                                <!--     <li><a href="#">My profile</a></li>
                                    <li><a href="#">Pricing plans</a></li>
                                    <li><a href="#">Contacts</a></li>-->
                                </ul>
                            </div>
                        </div>
                      <!--  <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Browse</b></p>
                                <ul class="footer-menu">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">My profile</a></li>
                                    <li><a href="#">Pricing plans</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>-->
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Help</b></p>
                                <ul class="footer-menu">
                                  <!--  <li><a href="#">About us</a></li>
                                    <li><a href="#">My profile</a></li>
                                    <li><a href="#">Pricing plans</a></li>-->
                                    <li><a href="contactus.php">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Download app</b></p>
                                <ul class="footer-menu">
                                    <li>
                                        <a href="#">
                                            <img src="img/google-play.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/app-store.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="copyright">
        2023
    </div>
    <!-- END FOOTER SECTION -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="app.js"></script>

</body>

</html>