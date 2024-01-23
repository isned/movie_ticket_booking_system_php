<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>update movie</title>
</head>

<body>



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
<?php
require_once('../controllers/movietableController.php');
$movietableCtr=new movietableController();
$res=$movietableCtr->getMovietable($_GET['id']);



?>
    <?php include('header.php'); ?>

    <div class="admin-container">
        <?php include('sidebar.php'); ?>
        <div class="admin-section admin-section2">
            <div class="admin-section-column">


                <div class="admin-section-panel admin-section-panel2">
                    <div class="admin-panel-section-header">
                        <h2>UPDATE MOVIE</h2>
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>
                    <div class="booking-form-container">
                        <form method="POST"  action="../view/modification_movie.php" enctype="multipart/form-data">
                        <label for="" style='color:white'>Movie ID</label>
                            <input type="text" name="id" value="<?php echo $res['movieID'] ?>" readonly>
                            <label for="" style='color:white'> Image</label>
                        <!-- <input type="text" name="movieImg" accept="img/*" value="<?php //echo $res['movieImg'] ?>" Required>-->
                         <input type="text" name="movieImg" accept="img/*" value="<?php echo $res['movieImg'] ?>" >

                            <label for="" style='color:white'>Title</label>
                            <input type="text" name="titre" value="<?php echo $res['movieTitle'] ?>" Required>
                            <label for="" style='color:white'>Genre</label>

                            <label for="movieGenre">Genre:</label>
<!--<select name="movieGenre" id="movieGenre" required>
  <option value="">Sélectionnez un genre</option>
  <option value="drama"<?php //if($res['movieGenre'] == 'drama') echo ' selected'; ?>>Drame</option>
  <option value="action"<?php //if($res['movieGenre'] == 'action') echo ' selected'; ?>>Action</option>
  <option value="comedy"<?php //if($res['movieGenre'] == 'comedy') echo ' selected'; ?>>Comédie</option>
  <option value="horror"<?php //if($res['movieGenre'] == 'horror') echo ' selected'; ?>>Horreur</option>
</select>-->



                        <!--    <select name="movieGenre" id="movieGenre" >
                            <option value="">Select a genre</option>
                            <?php
                               /* foreach ($genres as $genre) {
                                    $selected = '';
                                    if ($genre['genre'] == $res['movieGenre']) {
                                        $selected = 'selected';
                                    }
                                    echo '<option value="' . $genre['genre'] . '" ' . $selected . '>' . $genre['genre'] . '</option>';
                                 }
*/                            ?>
                            </select>-->


                          <!--  <input type="text" name="genre" value="<?php //echo $res['movieGenre'] ?>" Required>-->
                            <label for="" style='color:white'>  Duration</label>
                            <input type="text" name="duree" value="<?php echo $res['movieDuration'] ?>" Required>
                            <label for="" style='color:white'>Date</label>
                            <input type="text" name="date" value="<?php echo $res['movieRelDate'] ?> " Required>
                            <label for="" style='color:white'>Director</label>
                            <input type="text" name="director" value="<?php echo $res['movieDirector'] ?>" Required>
                            <label for="" style='color:white'>Actors</label>
                            <input type="text" name="actor" value="<?php echo $res['movieActors'] ?> "Required>
                            <label for="" style='color:white'>Main hall</label>
                            <input type="text" name="main" value="<?php echo $res['mainhall'] ?> "Required>
                            <label for="" style='color:white'>Vip hall</label>
                            <input type="text" name="vip" value="<?php echo $res['viphall'] ?>" Required>
                            <label for="" style='color:white'>Private hall</label>
                            <input type="text" name="private" value="<?php echo $res['privatehall'] ?>" Required> 
                            
                           <input type="submit" name="update" class="form-btn" value="Update">
                             
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    
</body>

</html>

<?php require_once('../controllers/categorieController.php');
$us=new categorieController();
$res=$us->liste_cat();?>