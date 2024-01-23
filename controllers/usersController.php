<?php
include_once('../models/users.php') ;
include_once('../database/config.php');
class usersController extends Modele{
function __construct() {
parent::__construct();
}


function nombreusers(){
    $query ="select COUNT(*) from users";
    $stmt = $this->pdo->query($query);
    $result = $stmt->fetchColumn();
    return $result;
    }  
 

function login_users($username,$uname){
   /* $query="SELECT COUNT(*) AS cntUser FROM users WHERE username = :uname AND password = :password";
    $stmt=$this->pdo ->query(($query))
    $result->bindParam(':uname', $uname, PDO::PARAM_STR);
    $result->bindParam(':password', $password, PDO::PARAM_STR);
    $result->execute();*/
}
function authenticateUser($username, $password) {
    $sql = "SELECT * FROM clients WHERE username=? AND password=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$username, $password]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
  
    return $result;
  }
  

public function getUserByUsernameAndPassword($username, $password) {
    $stmt = $this->pdo->prepare("SELECT COUNT(*) as cntUser FROM users WHERE username = :username AND password = :password");
    $stmt->execute(['username' => $username, 'password' => $password]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row['cntUser'];
}
function liste(){
    $query = "select * from users";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
    }
function delete_users($id) {
    $query = "delete from users where id=?";
    $res=$this->pdo->prepare($query);
    return $res->execute(array($id));
    }
function getUsers($id){
        $query="SELECT * FROM users WHERE id = ? ";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array= $res->fetch();
        return $array;
    }    
function insert(users $c){
        $query="insert into users(username,name,password)values(?, ?, ?)";
        $res=$this->pdo->prepare($query);
        
        
        $aryy =array($c->getUsername(),$c->getName(),$c->getPassword()) ;
        
        //var_dump($aryy);
        return $res->execute($aryy);
        
        } 
function modifier_users(users $c) {
            $sql = "update users SET username=?, name=?, password=? where id=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array($c->getUsername(), $c->getName(), $c->getPassword(), $c->getId()));
        }           
}