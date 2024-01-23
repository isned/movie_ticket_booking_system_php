<?php
include_once('../models/movietable.php') ;
include_once('../database/config.php');
class movietableController extends Modele{
function __construct() {
parent::__construct();
}

function insert(movietable $c){
$query="insert into movietable(movieImg,movieTitle,movieGenre,movieDuration,movieRelDate,movieDirector,movieActors,mainhall,viphall,privatehall)values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$res=$this->pdo->prepare($query);


$aryy =array($c->getMovieImg(),$c->getMovieTitle(),$c->getMovieGenre(),$c->getMovieDuration(),$c->getMovieRelDate(),$c->getMovieDirector(),$c->getMovieActors(),$c->getMainhall(),$c->getViphall(),$c->getPrivatehall()) ;

//var_dump($aryy);
return $res->execute($aryy);

}

function getMovietable($id){
    $query="SELECT * FROM movietable WHERE movieID = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function getMovieByID($id){
$movieQuery = "SELECT * FROM movieTable WHERE movieID = :id";
$stmt = $this->pdo->prepare($movieQuery);
$stmt->execute(['id' => $id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
return $row;

}
function delete_movie($movieID) {
$query = "delete from movietable where movieID=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($movieID));
}
function liste(){
$query = "select * from movietable";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function modifier_movie(movietable $c) {
   // $sql = "UPDATE movietable SET movieImg=?, movieTitle=?, movieGenre=?, movieDuration=?, movieRelDate=?, movieDirector=?, movieActors=?, mainhall=?, viphall=?, privatehall=? WHERE movieID=?";
   $sql=" UPDATE movietable SET movieImg = ?, movieTitle = ?, movieGenre = ?, movieDuration = ?, movieRelDate = ?, movieDirector = ?, movieActors = ?, mainhall = ?, viphall = ?, privatehall = ? WHERE movieID = ?";
    $stmt = $this->pdo->prepare($sql);
 
 //   print_r($c->getMovieImg());
 // $nom=$c->getMovieImg()['name'];

   return  $stmt->execute([$c->getMovieImg(), $c->getMovieTitle(), $c->getMovieGenre(), $c->getMovieDuration(), $c->getMovieRelDate(), $c->getMovieDirector(), $c->getMovieActors(), $c->getMainhall(), $c->getViphall(), $c->getPrivatehall(),$c->getMovieID()]);
}
/*function modifier_movie(movietable $c) {
    $sql = "UPDATE movietable SET movieImg=?, movieTitle=?, movieGenre=?, movieDuration=?, movieRelDate=?, movieDirector=?, movieActors=?, mainhall=?, viphall=?, privatehall=? WHERE movieID=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$c->getMovieImg(), $c->getMovieTitle(), $c->getMovieGenre(), $c->getMovieDuration(), $c->getMovieRelDate(), $c->getMovieDirector(), $c->getMovieActors(), $c->getMainhall(), $c->getViphall(), $c->getPrivatehall(), $c->getMovieID()]);
}*/


function nombremovie(){
    $query ="select COUNT(*) from movietable";
    $stmt = $this->pdo->query($query);
    $result = $stmt->fetchColumn();
    return $result;
    }   

}

?>


	