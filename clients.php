<?php

class clients {
private $id,$username,$name,$password,$phone,$email;
function __construct($id="",$username="",$name="",$password="",$phone="",$email="") {
	
    $this->id = $id;
    $this->username = $username;
    $this->name = $name;
    $this->password = $password;
    $this->phone=$phone;
    $this->email=$email;

    
}

// Getters
function getId() {
    return $this->id;
}

function getUsername() {
    return $this->username;
}

function getName() {
    return $this->name;
}

function getPassword() {
    return $this->password;
}

// Setters
function setId($id) {
    $this->id = $id;
}

function setUsername($username) {
    $this->username = $username;
}

function setName($name) {
    $this->name = $name;
}

function setPassword($password) {
    $this->password = $password;
}




function getEmail() {
    return $this->email;
}

function setEmail($email) {
    $this->email = $email;
}

function getPhone() {
    return $this->phone;
}

// Setters
function setPhone($phone) {
    $this->phone = $phone;
}
}