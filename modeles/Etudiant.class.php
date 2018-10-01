<?php
include "../core/Manager.class.php";
class Etudiant extends Personne {
    
    private $codePermanent;
    private $cours;

    public function __construct($n="", $p="", $nas="", $co="", $cours=""){
        parent::__construct($n, $p, $nas);
        $this->setCodePermanent($co);
        $this->setCours($cours);
    }
    public function faireDuSport(){
        return "je suis etudiant et je fais du sport ";
    }    
	
	
	
    //acceder à $codePermanent
    public function getCodePermanent(){
        return $this->codePermanent;
    }
    //modifier  $codePermanent
    public function setCodePermanent($code){
        if(is_string($code)){
            $this->codePermanent = $code;
        }else{
            echo "nom doit etre une chaine de caractere ..<br>";
        }  
    }
  
      //acceder à $cours
    public function getCours(){
        return $this->cours;
    }
    //modifier  $codePermanent
    public function setCours($c){
        if(is_string($c)){
            $this->cours = $c;
        }else{
            echo "le cours doit etre une chaine de caractere ..<br>";
        }  
    }
  
	
  
    //methodes magiques __toString()
    public function __toString(){ 
        $str = parent::__toString();
        $str .= "codePermanent :   ".$this->codePermanent."<br>" 
              ."cours  ".$this->cours ."<br>"  ;
        return $str;
    }
	
	
	public function inserer($manager){ 
		$valeur = array();
		$valeur[] = $this->nom;
		$valeur[] = $this->prenom;	
		$valeur[] = $this->nas;
		$valeur[] = $this->cours;	
		$valeur[] = $this->codePermanent;
		
		
		
    }
	
	
	
	public function lister(Manager $manager){ 
		//$manager->lister("Etudiant");
		$manager->lister(__CLASS__);
    }
		
	
}
