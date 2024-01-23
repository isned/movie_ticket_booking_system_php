<?php
require_once('../controllers/movietableController.php');
require_once('../models/movietable.php');
$movietableCtr=new movietableController();
$movietable=new movietable();
//$img='img.jpg';

//$movietable
$movietable->setMovieImg($_POST['movieImg']);
//$movietable->setMovieImg($_FILES['movieImg']);
//echo $_FILES['movieImg'];
//echo $_POST['titre'];
// Vérifier si le formulaire a été soumis
/*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Vérifier si une image a été téléchargée
    if (!empty($_FILES['movieImg']['tmp_name'])) {
      // Définir le chemin d'accès du dossier pour stocker l'image téléchargée
      $upload_dir = "uploads/";
      // Obtenir le nom du fichier téléchargé
      $file_name = basename($_FILES['movieImg']['name']);
      // Définir le chemin d'accès complet du fichier sur le serveur
      $upload_file = $upload_dir . $file_name;
      // Déplacer le fichier téléchargé vers le dossier de téléchargement
      if (move_uploaded_file($_FILES['movieImg']['tmp_name'], $upload_file)) {
        // Stocker le chemin d'accès complet du fichier dans la base de données
        $movietable->setMovieImg($upload_file);
      }
    }
  }*/
  

$movietable->setMovieID($_POST['id']);
$movietable->setMovieTitle($_POST['titre']);

$movietable->setMovieGenre($_POST['genre']);
$movietable->setMovieDuration($_POST['duree']);
$movietable->setMovieRelDate($_POST['date']);
$movietable->setMovieDirector($_POST['director']);
$movietable->setMovieActors($_POST['actor']);
$movietable->setMainhall($_POST['main']);
$movietable->setViphall($_POST['vip']);
$movietable->setPrivatehall($_POST['private']);



$movietableCtr->modifier_movie($movietable);

header('Location:../admin/addmovie.php');

?>