<?php
include_once('bookingtable.php') ;
include_once('config.php');
class bookingtableController extends Modele{
function __construct() {
parent::__construct();
}
function insert_add(BookingTable $c){
 $query="insert into bookingtable(movieID,bookingTheatre,bookingType,bookingDate,bookingTime,amount,id_Client)values(?, ?, ?, ?, ?, ?, ?)";
 $res=$this->pdo->prepare($query);
 $aryy =array($c->getMovieID(),$c->getBookingTheatre(),$c->getBookingType(),$c->getBookingDate(),$c->getBookingTime(),$c->getAmount(),$c->getuname()) ;
 return $res->execute($aryy);
 
 }

/* function insert_add(BookingTable $c){
        $query = "INSERT INTO bookingtable (movieID, bookingTheatre, bookingType, bookingDate, bookingTime, bookingFName, bookingLName, bookingPNumber, bookingEmail, amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);
        $aryy = array(
            $c->getMovieID(),
            $c->getBookingTheatre(),
            $c->getBookingType(),
            $c->getBookingDate(),
            $c->getBookingTime(),
            $c->getBookingFName(),
            $c->getBookingLName(),
            $c->getBookingPNumber(),
            $c->getBookingEmail(),
            $c->getAmount()
        );
    
        if (!$res->execute($aryy)) {
            $error = $res->errorInfo();
            // Output error information to help debug the issue
            echo "Error code: " . $error[0] . "<br>";
            echo "Error message: " . $error[2];
        }
        
        return $res->rowCount() > 0;
    }*/
    
 function liste(){
    $query = "select * from bookingtable";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
    }
function nombrebooking(){
        $query ="select COUNT(*) from bookingtable";
        $stmt = $this->pdo->query($query);
        $result = $stmt->fetchColumn();
        return $result;
        }    
function delete_booking($bookingID) {
        $query = "delete from bookingtable where bookingID=?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($bookingID));
        }  
function getBookingtable($id){
            $query="SELECT * FROM bookingtable WHERE bookingID = ? ";
            $res = $this->pdo->prepare($query);
            $res->execute(array($id));
            $array= $res->fetch();
            return $array;
        }     
             
}
?>