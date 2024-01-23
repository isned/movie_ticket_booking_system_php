<?php
include("../database/config.php");
class utilisateur_controller extends Modele{
    function __construct() {
    parent::__construct();
    }
   


    public function insertuser(Utilisateur $utilisateur){
        $query="INSERT INTO utilisateur(nom,prenom,date_naissance,phone,email,niveau,types,mot_passe,annee_universitaire) VALUES(?,?,?,?,?,?,?,?,?)";
        $stmt= $this->pdo->prepare($query);
        return $stmt->execute([$utilisateur->getNom(),$utilisateur->getPrenom(),$utilisateur->getDate_naissance(),$utilisateur->getPhone(),$utilisateur->getEmail(),$utilisateur->getTypes(),$utilisateur->getMot_passe()]);
    }


    public function updateuser(Utilisateur $utilisateur){
        $query="UPDATE utilisateur SET nom=?, prenom=?, date_naissance=?, phone=?, email=?, niveau=?, types=?, mot_passe=?, annee_universitaire=? WHERE id_utilisateur=?";
        $stmt= $this->pdo->prepare($query);
        return $stmt->execute([$utilisateur->getNom(),$utilisateur->getPrenom(),$utilisateur->getDate_naissance(),$utilisateur->getPhone(),$utilisateur->getEmail(),$utilisateur->getTypes(),$utilisateur->getMot_passe(), $utilisateur->getId()]);
    }


    public function deleteuser($id_utilisateur){
        $query="DELETE FROM utilisateur WHERE id_utilisateur=?";
        $stmt= $this->pdo->prepare($query);
        return $stmt->execute([$id_utilisateur]);
    }


    public function selectAdmin(){
        $query="SELECT * FROM utilisateur WHERE types='admin'";
        $stmt= $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt;
    }


    public function selectClient(){
        $query="SELECT * FROM utilisateur WHERE types='client'";
        $stmt= $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt;
    }


   

    function getuser($id_utilisateur){
        $query="SELECT * FROM utilisateur WHERE id_utilisateur = ? ";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$id_utilisateur]);
        $array= $stmt->fetch();
        return $array;
    }


    public function login($email,$mot_passe){
        $query="SELECT id_utilisateur,email,types,mot_passe FROM utilisateur WHERE email='$email' and mot_passe='$mot_passe'";
        $stmt= $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function selectUser($id_utilisateur){
        $query="SELECT types FROM utilisateur WHERE id_utilisateur= ?";
        $stmt= $this->pdo->prepare($query);
        $stmt->execute([$id_utilisateur]);
        $array= $stmt->fetch();
        return $array;
    }
  
    public function selecttype($id_utilisateur){
        $query="SELECT types from utilisateur WHERE id_utilisateur=? ";
        $stmt= $this->pdo->prepare($query);
        $stmt->execute([$id_utilisateur]);
        $array= $stmt->fetch();
        return $array;
    }
    function getid($id_utilisateur){
        $query="SELECT * FROM utilisateur WHERE id_utilisateur = ? ";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$id_utilisateur]);
        $array= $stmt->fetch();
        return $array;
    }
    public function nombreadmin(){
        $query ="select COUNT(*) from utilisateur where types='admin'";
        $stmt = $this->pdo->query($query);
        $result = $stmt->fetchColumn();
        return $result;
    }
    public function nombreclient(){
        $query ="select COUNT(*) from utilisateur where types='client'";
        $stmt = $this->pdo->query($query);
        $result = $stmt->fetchColumn();
        return $result;
    }
 


    
    


    
   
}
?>