<?php
class categorie {
    
    private $id;
    private $genre;
    
    public function __construct($id="", $genre="") {
        $this->id = $id;
        $this->genre = $genre;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getGenre() {
        return $this->genre;
    }
    
    public function setGenre($genre) {
        $this->genre = $genre;
    }
    
}

  


?>