<?php
class utilisateur
{
    //les attributs
   private $id_utilisateur;
   private $nom;
   private $prenom;
   private $date_naissance;
   private $phone;
   private $email;
   private $types;
   private $mot_passe;
 


   public function __construct( $nom, $prenom,$date_naissance,$phone,$email,$types,$mot_passe) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->date_naissance = $date_naissance;
    $this->phone = $phone;
    $this->email = $email;
    $this->types = $types;
    $this->mot_passe = $mot_passe;
}


//public function __construct(){


//}
   
   // getter et setter
   public function setId($id_utilisateur){
    $this->id_utilisateur = $id_utilisateur;
   }
   public function getId(){
    return $this->id_utilisateur;
   }


   public function setNom($nom){
    $this->nom = $nom;
   }
   public function getNom(){
    return $this->nom;
   }


   public function setPrenom($prenom){
    $this->prenom = $prenom;
   }
   public function getPrenom(){
    return $this->prenom;
   }


   public function setDate_naissance($date_naissance){
    $this->date_naissance = $date_naissance;
   }
   public function getDate_naissance(){
    return $this->date_naissance;
   }


   public function setPhone($phone){
    $this->phone = $phone;
   }
   public function getPhone(){
    return $this->phone;
   }


   public function setEmail($email){
    $this->email = $email;
   }
   public function getEmail(){
    return $this->email;
   }




   public function setTypes($types){
    $this->types = $types;
   }
   public function getTypes(){
    return $this->types;
   }


   public function setMot_passe($mot_passe){
    $this->mot_passe = $mot_passe; 
   }
   public function getMot_passe(){
    return $this->mot_passe;
   }


 
}
?>