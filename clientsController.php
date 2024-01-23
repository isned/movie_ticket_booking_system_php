<?php
include_once('clients.php') ;
include_once('config.php');
class clientsController extends Modele{
function __construct() {
parent::__construct();
}
function liste(){
    $query = "select * from clients";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
    }
function delete_clients($id) {
    $query = "delete from clients where id=?";
    $res=$this->pdo->prepare($query);
    return $res->execute(array($id));
    }
function nombreclients(){
    $query ="select COUNT(*) from clients";
    $stmt = $this->pdo->query($query);
    $result = $stmt->fetchColumn();
    return $result;
    }   
public function getClientsAffiche($username, $password) {
        $stmt = $this->pdo->prepare("SELECT * FROM clients WHERE username = :username AND password = :password");
        $stmt->execute(['username' => $username, 'password' => $password]);
        $array= $stmt->fetch();
        return $array;
        
    }
function getClients($id){
        $query="SELECT * FROM clients WHERE id = ? ";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array= $res->fetch();
        return $array;
    }
public function getClientsByUsernameAndPassword($username, $password) {
    $stmt = $this->pdo->prepare("SELECT COUNT(*) as cntUser FROM clients WHERE username = :username AND password = :password");
    $stmt->execute(['username' => $username, 'password' => $password]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row['cntUser'];
}
function modifier_clients(clients $c) {
    $sql = "update clients SET username=?, name=?, password=? where id=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(array($c->getUsername(), $c->getName(), $c->getPassword(), $c->getId()));
}
function insert(clients $c){
    $query="insert into clients(username,name,password,phone,email)values(?, ?, ?, ?, ?)";
    $res=$this->pdo->prepare($query);
    $aryy =array($c->getUsername(),$c->getName(),$c->getPassword(),$c->getPhone(),$c->getEmail()) ;
    return $res->execute($aryy);
    
    } 
}