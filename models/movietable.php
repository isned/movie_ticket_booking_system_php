<?php

class movietable {
private $movieID,$movieImg,$movieTitle,$movieGenre,$movieDuration,$movieRelDate,$movieDirector,$movieActors,$mainhall,$viphall,$privatehall;
function __construct($movieID="",$movieImg="",$movieTitle="",$movieGenre="",$movieDuration="",$movieRelDate="",$movieDirector="",$movieActors="",$mainhall="",$viphall="",$privatehall="") {
    $this->movieID=$movieID;
    $this->movieImg=$movieImg;
    $this->movieTitle=$movieTitle;
    $this->movieGenre=$movieGenre;
    $this->movieDuration=$movieDuration;
    $this->movieRelDate=$movieRelDate;
    $this->movieDirector=$movieDirector;
    $this->movieActors=$movieActors;
    $this->mainhall=$mainhall;
    $this->viphall=$viphall;
    $this->privatehall=$privatehall;
    
}


    public function getMovieID() {
        return $this->movieID;
    }

    public function setMovieID($movieID) {
        $this->movieID = $movieID;
    }

    public function getMovieImg() {
        return $this->movieImg;
    }

    public function setMovieImg($movieImg) {
        $this->movieImg = $movieImg;
    }

    public function getMovieTitle() {
        return $this->movieTitle;
    }

    public function setMovieTitle($movieTitle) {
        $this->movieTitle = $movieTitle;
    }

    public function getMovieGenre() {
        return $this->movieGenre;
    }

    public function setMovieGenre($movieGenre) {
        $this->movieGenre = $movieGenre;
    }

    public function getMovieDuration() {
        return $this->movieDuration;
    }

    public function setMovieDuration($movieDuration) {
        $this->movieDuration = $movieDuration;
    }

    public function getMovieRelDate() {
        return $this->movieRelDate;
    }

    public function setMovieRelDate($movieRelDate) {
        $this->movieRelDate = $movieRelDate;
    }

    public function getMovieDirector() {
        return $this->movieDirector;
    }

    public function setMovieDirector($movieDirector) {
        $this->movieDirector = $movieDirector;
    }

    public function getMovieActors() {
        return $this->movieActors;
    }

    public function setMovieActors($movieActors) {
        $this->movieActors = $movieActors;
    }

    public function getMainhall() {
        return $this->mainhall;
    }

    public function setMainhall($mainhall) {
        $this->mainhall = $mainhall;
    }

    public function getViphall() {
        return $this->viphall;
    }

    public function setViphall($viphall) {
        $this->viphall = $viphall;
    }

    public function getPrivatehall() {
        return $this->privatehall;
    }

    public function setPrivatehall($privatehall) {
        $this->privatehall = $privatehall;
    }
}


?>