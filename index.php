<!DOCTYPE html>
<html lang="en">

<head>
   <?php require_once("header.php");
   $id = $_GET['id'];
   setcookie('id', $id , time() + (86400 * 30), '/'); 
   ?>
  <!--  <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        MOVIES
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href="style.css">-->
    <style type="text/css">
        .movie-show-container {
  margin-top: 20;
  padding: 0 10%;
}

.movie-show-container > h1 {
  color: #6e5a11;
  text-align: left;
  padding: 0 0 10px 0;
}

.movie-show-container > h3 {
  color: #969696;
  text-align: left;
  padding: 0 0 10px 0;
}

.movie-show-container > h3:after {
  content: "";
  display: block;
  height: 3px;
  width: 7%;
  background: #6e5a11;
  position: relative;
  bottom: -10px;
}

.movies-container {
  display: grid;
  grid-column-gap: 20px;
  grid-template-columns: auto auto auto auto auto auto;
  padding: 40px 0;
}

.movie-box {
  position: relative;
  margin: 30px 0;
}

.movie-box img {
  display: block;
  height: 100%;
  width: 100%;
}

.movie-box .movie-info {
  padding: 50% 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: 0.7s ease;
  background-color: rgb(0, 0, 0);
}

.movie-box:hover .movie-info {
  opacity: 0.8;
}

.movie-info > h3 {
  padding: 10px 0;
  color: #fff;
}

.movie-info > a {
  display: inline-block;
  padding: 0.35em 1.2em;
  border: 0.1em solid #ffffff;
  border-radius: 0.13em;
  box-sizing: border-box;
  text-decoration: none;
  font-weight: 300;
  color: #ffffff;
  text-align: center;
  transition: all 0.2s;
}

.movie-info > a:hover {
  color: #000000;
  background-color: #ffffff;
}
.services-section {
        padding: 0 10%;
        text-align: center;
      }
      
      .services-section > h1 {
        color: #6e5a11;
        text-align: left;
        padding: 0 0 10px 0;
      }
      
      .services-section > h3 {
        color: #969696;
        text-align: left;
        padding: 0 0 20px 0;
      }
      
      .services-section > h3:after {
        content: "";
        display: block;
        height: 3px;
        width: 7%;
        background: #6e5a11;
        position: relative;
        bottom: -10px;
      }
      
      .services-container {
        margin: 40px 0;
        display: grid;
        grid-template-columns: auto auto auto;
        grid-column-gap: 4%;
      }
      
      .service-item > h2 {
        color: #6e5a11;
        padding: 25px 0;
      }
      
      .service-item-icon i {
        font-size: 40px;
        color: white;
        height: 120px;
        width: 120px;
        background-color: rgb(126, 126, 126);
        border-radius: 50%;
        border: #c7c7c7 12px solid;
        line-height: 90px;
        transition: all 0.5s ease;
      }
      
      .service-item-icon i:hover {
        background-color: #c7c7c7;
        color: rgb(126, 126, 126);
      }

    </style>  
</head>

<body>


    <!-- NAV -->
   <!-- <div class="nav-wrapper">
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
                    
                    <li>
                        <a href="admin/index.php" class="btn btn-hover" >
                            <span>Login</span>
                        </a>
                    </li>
              
                </ul>
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- END NAV -->
   
    <!-- HERO SECTION -->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="img/avatar1.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down" >
                                Avatar:The Way Of the water
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>8.3</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>185 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>USA</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Jake Sully and Ney'tiri have formed a family and are doing everything to stay together. However, they must leave their home and explore the regions of Pandora. When an ancient threat resurfaces, Jake must fight a difficult war against the humans.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="https://www.youtube.com/embed/d9MyW72ELq0" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch trailer</span>
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="img/megan2.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                MEGAN
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>6.7</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>103mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>USA</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                MEGAN is a marvel of artificial intelligence, a lifelike doll that's programmed to be a child's greatest companion and a parent's greatest ally. Designed by Gemma, a brilliant roboticist, MEGAN can listen, watch and learn as it plays the role of friend and teacher, playmate and protector.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="https://www.youtube.com/embed/BRb4U99OU80" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch trailer</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="img/man1.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                            The Man from Toronto
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>6</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>112 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>USA</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                            A case of mistaken identity forces a bumbling entrepreneur to team up with a notorious assassin in hopes of staying alive
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="https://www.youtube.com/embed/urqy8DrcGBs" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch trailer</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="img/a.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down" >
                            Army of Thieves
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>7</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>127 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>USA</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                            In this prequel to "Army of the Dead," a mysterious woman recruits bank teller Dieter to assist in a heist of impossible-to-crack safes across Europe
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="https://www.youtube.com/embed/OdbXnboJCVw" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch trailer</span>
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HERO SLIDE -->
        <br>
        
        

        <div id="home-section-1" class="movie-show-container">
        <h1 style="color:#A82626;">Currently Showing</h1>
        <h3 style="color:black;">Book a movie now</h3>
        <div class="movies-container">
        <?php require_once("affiche_index_movie.php"); ?>

            <?php
           /*if ($result = mysqli_query($con, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($rows as $row) {
    echo '<div class="movie-box">';
    echo '<img src="' . $row['movieImg'] . '" alt=" ">';
    echo '<div class="movie-info ">';
    echo '<h3>' . $row['movieTitle'] . '</h3>';
    echo '<a href="booking.php?id=' . $row['movieID'] . '"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
    echo '</div>';
    echo '</div>';
}

                    mysqli_free_result($result);
                } else {
                    echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
            }

            // Close connection
            mysqli_close($con);*/
            ?>
        </div>
    </div>
     <!-- SPECIAL MOVIE SECTION -->
     <div class="section">
        <div class="hero-slide-item">
            <img src="img/mati.jpg" alt="">
            <div class="overlay"></div>
            <div class="hero-slide-item-content">
                <div class="item-content-wraper">
                    <div class="item-content-title">
                        Matilda the Musical
                    </div>
                    <div class="movie-infos">
                        <div class="movie-info">
                            <i class="bx bxs-star"></i>
                            <span>9.5</span>
                        </div>
                        <div class="movie-info">
                            <i class="bx bxs-time"></i>
                            <span>120 mins</span>
                        </div>
                        <div class="movie-info">
                            <span>HD</span>
                        </div>
                        <div class="movie-info">
                            <span>16+</span>
                        </div>
                    </div>
                    <div class="item-content-description">
                        Matilda lives with her brother and parents, who are unappreciative of her. She utilises her telekinetic abilities to settle the score after her principal brutally tortures her with the help of her kind-hearted teacher.
                    </div>
                    <div class="item-action">
                        <a href="https://www.youtube.com/embed/mEEMbNS6fzY" class="btn btn-hover">
                            <i class="bx bxs-right-arrow"></i>
                            <span>Watch trailer</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SPECIAL MOVIE SECTION -->

        <!-- TOP MOVIES SLIDE 
        <div class="top-movies-slide">
            <div class="owl-carousel" id="top-movies-slide">
                
                <div class="movie-item">
                    <img src="img/plane.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Plane
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>6.9</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>108 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>USA</span>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="movie-item">
                    <img src="img/karate.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Karate Kid 
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>6.8</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>USA</span>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="movie-item">
                    <img src="img/passan.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Passengers
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>7.6</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>110 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="movie-item">
                    <img src="img/blood.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Bloodshot
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>6</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>USA</span>
                            </div>
                        </div>
                    </div>
                </div>
           
                <div class="movie-item">
                    <img src="img/the upside.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            The Upside
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>7.9</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>105 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>USA</span>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="movie-item">
                    <img src="img/dark.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            The Dark Knight
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.0</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>USA</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>-->
   

    <!-- LATEST MOVIES SECTION -->
    <div class="section" id="sec_mov">
        <div class="container" >
            <div class="section-header" style="color:black">
                Coming Soon
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <?php  require_once("coming_soon.php");?>
            <!--    <a href="https://www.youtube.com/embed/IiMinixSXII" class="movie-item">
                    <img src="img/d.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                        Donjons & Dragons
                        </div>
                        <div class="movie-infos">
                            
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>134 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>12 April 2023</span>
                            </div>
                           
                        </div>
                    </div>
                </a>-->
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
               <!-- 
                <a href="https://www.youtube.com/embed/SgwKZAMx_gM" class="movie-item">
                    <img src="img/white.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            White Noise
                        </div>
                        <div class="movie-infos">
                            
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>23 may 2023</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
              
                <a href="https://www.youtube.com/embed/fKHVHzCGmF0" class="movie-item">
                    <img src="img/sharper.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Sharper
                        </div>
                        <div class="movie-infos">
                            
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>145 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>12 may 2023</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
               
                <a href="https://www.youtube.com/embed/a6O30nJ02PU" class="movie-item">
                    <img src="img/fatn.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Fantasy Island
                        </div>
                        <div class="movie-infos">
                            
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>25 april 2023</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
               
                <a href="https://www.youtube.com/embed/R_GFMbq4JPo" class="movie-item">
                    <img src="img/escape.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title" >
                            Escape From Pretoria
                        </div>
                        <div class="movie-infos">
                           
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>30May2023</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
                
                <a href="https://www.youtube.com/embed/WAEoJkL_8zU" class="movie-item">
                    <img src="img/greta.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            GRETA
                        </div>
                        <div class="movie-infos">
                            
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>148 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>3August2023</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
                
                <a href="https://www.youtube.com/embed/G2wPoBy2JQI" class="movie-item">
                    <img src="img/miracle.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Miracle In Cell no 7 
                        </div>
                        <div class="movie-infos">
                            
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>108 mins</span>
                            </div>
                           
                            <div class="movie-info">
                                <span>28April2023</span>
                            </div>
                        </div>
                    </div>
                </a>-->
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST MOVIES SECTION -->

    <!-- LATEST SERIES SECTION 
    <div class="section" id="sec_ser">
        <div class="container">
            <div class="section-header">
                Coming Soon
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                
                <a href="#" class="movie-item">
                    <img src="img/you.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            You
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.2</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>Action</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>USA</span>
                            </div>
                        </div>
                    </div>
                </a>
               
                <a href="#" class="movie-item">
                    <img src="img/wen.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Wednesday
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>8.2</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>Fantasy,Comedy Horror</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>USA</span>
                            </div>
                        </div>
                    </div>
                </a>
               
                <a href="#" class="movie-item">
                    <img src="img/star.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Star Trek
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>8.4</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                
                <a href="#" class="movie-item">
                    <img src="img/kal.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Kaleidoscope
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>7.4</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
               
                <a href="#" class="movie-item">
                    <img src="img/mand.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Mandalorian
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>8.7</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
               
                <a href="#" class="movie-item">
                    <img src="img/falcon.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            The Falcon And The Winter Soldier
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
              
                <a href="#" class="movie-item">
                    <img src="img/casa.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Casa de Papel
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
               
            </div>
        </div>
    </div>
     END LATEST SERIES SECTION -->

    <!-- LATEST CARTOONS SECTION 
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest cartoons
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                
                <a href="#" class="movie-item">
                    <img src="img/demons.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Demon Slayer
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
            
                <a href="#" class="movie-item">
                    <img src="img/croods.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Croods
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
              
                <a href="#" class="movie-item">
                    <img src="img/dra.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Dragonball
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
             
                <a href="#" class="movie-item">
                    <img src="img/over.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Over The Moon
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
             
                <a href="#" class="movie-item">
                    <img src="img/wer.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Weathering With You
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                
                <a href="#" class="movie-item">
                    <img src="img/the seven.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            The Seven Deadly Sins
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                
                <a href="#" class="movie-item">
                    <img src="img/coco.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Coco
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
               
            </div>
        </div>
    </div>
     END LATEST CARTOONS SECTION -->

   
    <!-- PRICING SECTION 
    <div class="section">
        <div class="container">
            <div class="pricing">
                <div class="pricing-header">
                    MO<span class="main-color">VI</span>S pricing
                </div>
                <div class="pricing-list">
                    <div class="row">
                        <div class="col-4 col-md-12 col-sm-12">
                            <div class="pricing-box">
                                <div class="pricing-box-header">
                                    <div class="pricing-name">
                                        Basic
                                    </div>
                                    <div class="pricing-price">
                                        Free
                                    </div>
                                </div>
                                <div class="pricing-box-content">
                                    <p>Originals</p>
                                    <p>Swich plans anytime</p>
                                    <p><del>65+ top Live</del></p>
                                    <p><del>TV Channels</del></p>
                                </div>
                                <div class="pricing-box-action">
                                    <a href="#" class="btn btn-hover">
                                        <span>Register now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-12 col-sm-12">
                            <div class="pricing-box hightlight">
                                <div class="pricing-box-header">
                                    <div class="pricing-name">
                                        Premium
                                    </div>
                                    <div class="pricing-price">
                                        $35.99 <span>/month</span>
                                    </div>
                                </div>
                                <div class="pricing-box-content">
                                    <p>Originals</p>
                                    <p>Swich plans anytime</p>
                                    <p><del>65+ top Live</del></p>
                                    <p><del>TV Channels</del></p>
                                </div>
                                <div class="pricing-box-action">
                                    <a href="#" class="btn btn-hover">
                                        <span>Register now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-12 col-sm-12">
                            <div class="pricing-box">
                                <div class="pricing-box-header">
                                    <div class="pricing-name">
                                        VIP
                                    </div>
                                    <div class="pricing-price">
                                        $65.99 <span>/month</span>
                                    </div>
                                </div>
                                <div class="pricing-box-content">
                                    <p>Originals</p>
                                    <p>Swich plans anytime</p>
                                    <p><del>65+ top Live</del></p>
                                    <p><del>TV Channels</del></p>
                                </div>
                                <div class="pricing-box-action">
                                    <a href="#" class="btn btn-hover">
                                        <span>Register now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     END PRICING SECTION -->


     
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
    <!-- END FOOTER SECTION -->

    
    <div class="copyright">
        2023
    </div>
    

    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="app.js"></script>

</body>

</html>