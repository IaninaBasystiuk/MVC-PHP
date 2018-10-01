<?php

class enseignantController extends Controller{

	public function listerAction(){
		$tab = $this->modele->getManager()->lister("enseignant");
		//afficher la vue accueil
		$this->view->afficherListeEnseignants($tab);//!!!Change everywhere!!!!!!
	}
	
	public function estPresentAction(){
		$strNom = $_REQUEST["nom"];
        $strPrenom = $_REQUEST["prenom"];
        //var_dump($strNom);
        //var_dump($strPrenom);
		$resultat = $this->modele->getManager()->estPresent("enseignant", "nom", "prenom", $strNom, $strPrenom);
		echo $resultat;
	}

	public function insererAction(){
		if(!empty($_POST)){
			//print_r($_POST);
			
			//récupérer les informations du POST
			$tab=array(
				"nom"=>$_POST["nom"],
				"prenom"=>$_POST["prenom"],
				"nas"=>$_POST["nas"],
				"cours"=>$_POST["cours"]
			);

			$this->modele->getManager()->inserer("enseignant", $tab);
		}
		$this->view->insererEnseignant();	
	}
    
    public function modifierAction(){
        
        var_dump($_GET);
        $tab = $this->modele->getManager()->listerUneRangee("enseignant", $_GET['id']);
		//afficher la vue avec formulaire preramplie
		$this->view->confirmModifierEnseignant($tab);
 
	}
    
    
    public function apresModifications(){
        
        if(!empty($_POST)){
			//print_r($_POST);
			
			//récupérer les informations du POST
			$tab=array(
                "id"=>$_POST["id"],
				"nom"=>$_POST["nom"],
				"prenom"=>$_POST["prenom"],
				"nas"=>$_POST["nas"],
				"cours"=>$_POST["cours"]
			);

			$this->modele->getManager()->modifier("enseignant", $tab);
		}
		$this->listerAction();	//appellation de function qui vas lister les enseignants	
	}
    
    public function supprimerAction($id){
		
			

        $this->modele->getManager()->supprimer("enseignant", $id);
		
		$this->listerAction();	//appellation de function qui vas lister les enseignants		
	}
}