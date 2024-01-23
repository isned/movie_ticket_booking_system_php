<?php

class users {
private $id,$username,$name,$password;
function __construct($id="",$username="",$name="",$password="") {
	
    $this->id = $id;
    $this->username = $username;
    $this->name = $name;
    $this->password = $password;
    
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
}