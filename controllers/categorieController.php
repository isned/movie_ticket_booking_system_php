<?php
include_once('../models/categorie.php') ;
include_once('../database/config.php');
class categorieController extends Modele{
function __construct() {
parent::__construct();
}
function liste(){
    $query = "select * from categorie";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
    }

function liste_cat(){
    $query = "select genre from categorie";
    $res=$this->pdo->prepare($query);
    $res->execute();
    $genres = $res->fetchAll(PDO::FETCH_ASSOC);

    return $genres;

    
}    
function delete_categorie($id) {
    $query = "delete from categorie where id=?";
    $res=$this->pdo->prepare($query);
    return $res->execute(array($id));
    }


function getCategorie($id){
        $query="SELECT * FROM categorie WHERE id = ? ";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array= $res->fetch();
        return $array;
    }

function modifier_categorie(categorie $c) {
    $sql = "update categorie SET genre=? where id=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(array($c->getGenre(),  $c->getId()));
}
function insert(categorie $c){
    $query="insert into categorie(genre)values(?)";
    $res=$this->pdo->prepare($query);
    
    
    $aryy =array($c->getGenre()) ;
    
    //var_dump($aryy);
    return $res->execute($aryy);
    
    }
    
}