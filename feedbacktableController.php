<?php
//require_once('../models/feedbacktable.php') ;
//require_once('../database/config.php');
include_once('feedbacktable.php') ;
include_once('config.php');
class feedbacktableController extends Modele{
function __construct() {
parent::__construct();
}

function insert(feedbacktable $c){
$query="insert into feedbacktable(senderfName,senderlName,sendereMail,senderfeedback)values(?, ?, ?, ?)";
$res=$this->pdo->prepare($query);
$aryy =array($c->getSenderfName(),$c->getSenderlName(),$c->getSendereMail(),$c->getSenderfeedback()) ;
return $res->execute($aryy);

}

function getFeedbacktable($id){
    $query="SELECT * FROM feedbacktable WHERE msgID = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete_feed($msgID) {
$query = "delete from feedbacktable where msgID=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($msgID));
}
function liste(){
$query = "select * from feedbacktable";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}


function nombrefeed(){
    $query ="select COUNT(*) from feedbacktable";
    $stmt = $this->pdo->query($query);
    $result = $stmt->fetchColumn();
    return $result;
    }   
}

?>


	