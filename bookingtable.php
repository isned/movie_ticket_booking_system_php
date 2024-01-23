<?php
class BookingTable {
    private $bookingID;
    private $movieID;
    private $bookingTheatre;
    private $bookingType;
    private $bookingDate;
    private $bookingTime;
    private $bookingFName;
    private $bookingLName;
    private $bookingPNumber;
    private $bookingEmail;
    private $amount;
    private $ORDERID;
    private $DATE_TIME;
    private $uname;

    public function __construct( $movieID="", $bookingTheatre="", $bookingType="", $bookingDate="", $bookingTime="", $amount="",$uname="") {
        //$this->bookingID = $bookingID;
        $this->movieID = $movieID;
        $this->bookingTheatre = $bookingTheatre;
        $this->bookingType = $bookingType;
        $this->bookingDate = $bookingDate;
        $this->bookingTime = $bookingTime;
        /*$this->bookingFName = $bookingFName;
        $this->bookingLName = $bookingLName;
        $this->bookingPNumber = $bookingPNumber;
        $this->bookingEmail = $bookingEmail;*/
        $this->amount = $amount;
        $this->uname = $uname;
        
    }

    // Getters
    public function getBookingID() {
        return $this->bookingID;
    }

    public function getMovieID() {
        return $this->movieID;
    }

    public function getBookingTheatre() {
        return $this->bookingTheatre;
    }

    public function getBookingType() {
        return $this->bookingType;
    }

    public function getBookingDate() {
        return $this->bookingDate;
    }

    public function getBookingTime() {
        return $this->bookingTime;
    }

    public function getBookingFName() {
        return $this->bookingFName;
    }

    public function getBookingLName() {
        return $this->bookingLName;
    }

    public function getBookingPNumber() {
        return $this->bookingPNumber;
    }

    public function getBookingEmail() {
        return $this->bookingEmail;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getORDERID() {
        return $this->ORDERID;
    }

    public function getDATE_TIME() {
        return $this->DATE_TIME;
    }
    public function getuname() {
        return $this->uname;
    }

    // Setters
    public function setBookingID($bookingID) {
        $this->bookingID = $bookingID;
    }

    public function setMovieID($movieID) {
        $this->movieID = $movieID;
    }

    public function setBookingTheatre($bookingTheatre) {
        $this->bookingTheatre = $bookingTheatre;
    }

    public function setBookingType($bookingType) {
        $this->bookingType = $bookingType;
    }

    public function setBookingDate($bookingDate) {
        $this->bookingDate = $bookingDate;
    }

    public function setBookingTime($bookingTime) {
        $this->bookingTime = $bookingTime;
    }

    public function setBookingFName($bookingFName) {
        $this->bookingFName = $bookingFName;
    }

    public function setBookingLName($bookingLName) {
        $this->bookingLName = $bookingLName;}
    public function setBookingPNumber($bookingPNumber){
        $this->bookingPNumber=$bookingPNumber;
    }
    
    public function setBookingEmail($bookingEmail) {
            $this->bookingEmail = $bookingEmail;
        }
        
    public function setAmount($amount) {
            $this->amount = $amount;
        }
        
    public function setORDERID($ORDERID) {
            $this->ORDERID = $ORDERID;
        }
        
    public function setDATE_TIME($DATE_TIME) {
            $this->DATE_TIME = $DATE_TIME;
        }

    public function setuname($uname) {
        $this->uname = $uname;
    }
            

}    




  


?>