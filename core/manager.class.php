<?php
include_once "Connexion.class.php";
include_once "ManagerBase.class.php";
class Manager implements ManagerBase{
    
	private $connexion;
	public function __construct(){	
		$this->connexion = Connexion::getInstance();

	}


	public function inserer($table, $valeur){
		//$valeur array("codePermanent"=>"etud2010","cours"=>10,"prof"=>"mamadou")
	$key="";
	$v="";
		foreach($valeur as $k=>$s){
			$key.=$k.",";
			if(is_string($s)){
				$v.="'".$s."',";
			}else{
				$v.=$s.",";			
			}		
			
		}
		//j'enleve la derniere virgule
		$v = substr($v, 0, -1); 
		$key = substr($key, 0, -1);
		
		
		//$v= 'etud2010',10,
		$requete = "INSERT INTO $table ($key) VALUES($v)" ;
		//die($requete);
		$result = $this->connexion->exec($requete);

	}
    
    public function modifier($table, $valeur){
        
        //var_dump($table);
        //var_dump($valeur);
       
        
        
        foreach($valeur as $key =>$value){
            
            $requete = "UPDATE $table SET $key = '$value' where id = ".$valeur['id'];
            //var_dump($requete);
            $result = $this->connexion->exec($requete);  
            
        }
        

		return "modification Ok";
	}
    
	public function estPresent($table, $colonne1, $colonne2, $str1, $str2){
		if (is_string($str1 && $str2)){
            
            //SELECT nom,prenom FROM `enseignant` WHERE nom = 'TOTO' AND prenom = 'Jerom'
			$requete = "SELECT $colonne1,$colonne2 FROM $table WHERE $colonne1 = $str1 AND $colonne2 = $str2" ;
            //die($requete);
		}else{
			$requete = "SELECT $colonne1,$colonne2 FROM $table WHERE $colonne1 = '$str1' AND $colonne2 = '$str2'" ;
            //die($requete);
		}
		
		$result = $this->connexion->query($requete);
		$liste = $result->fetchAll(PDO::FETCH_ASSOC);
        
        //var_dump($result);
        //var_dump($liste);
        //die();
		if(isset($liste[0]))
		{
			return "deja present";
		}
		else		
		{
			return "nouveau";
		}
	
	}
	
	
	
	public function supprimer($table, $id){
        //var_dump($table);
        //var_dump($id);
        $requete = "DELETE FROM ".$table." where id = ".$id;
		//die($requete);
		$result = $this->connexion->exec($requete);
     
		return "suppression Ok";
	}
	public function lister($table){
		$requete = "SELECT * FROM $table" ;
		$result = $this->connexion->query($requete);
		$liste = $result->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
	}
    
    public function listerUneRangee($table, $id){
		$requete = "SELECT * FROM $table WHERE ID = $id" ;
        //die($requete);
		$result = $this->connexion->query($requete);
		$liste = $result->fetch(PDO::FETCH_ASSOC);
        //var_dump($liste);
		return $liste;
	}
    
    
}












