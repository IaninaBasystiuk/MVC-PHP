<?php

abstract class Personne{
    
    private $nom;
    private $prenom;
    private $nas;
    
    public function __construct($n="", $p="", $nas=""){
        
        $this->setNom($n);
        $this->setPrenom($p);
        $this->setNas($nas);
    }
    
    
    //acceder à $nom
    public function getNom(){
        return $this->nom;
    }
    //modifier  $nom
    public function setNom($nom){
        if(is_string($nom)){
            $this->nom = $nom;
        }else{
            echo "nom doit etre une chaine de caractere ..<br>";
        }  
    }
    //acceder à $prennom
    public  function getPrenom(){
        return $this->prenom;
    }
    //modifier  $prenom
    public function setPrenom($prenom){
        if(is_string($prenom)){
            $this->prenom = $prenom;
        }else{
            echo "prenom doit etre une chaine de caractere ..<br>";
        }  
    }
    //acceder à $nas
    public function getNas(){
        return $this->nas;
    }
    //modifier  $nas
    public function setNas($nas){
        if(is_string($nas)){
            $this->nas = $nas;
        }else{
            echo "le nas doit etre une chaine de caractere ..<br>";
        }  
    }
    public function travailler(){
        return $this->nom ."  je travaille ......";
    }
    
    //methodes magiques __toString()
    public function __toString(){ 
        return "Nom :   ".$this->nom."<br>" 
              ."Prenom  ".$this->prenom ."<br>" 
              ."Nas     ".$this->nas."<br>" ;
    }
}
