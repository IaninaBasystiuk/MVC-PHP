<?php

class etudiantController extends Controller{

	public function listerAction(){
		$tab = $this->modele->getManager()->lister("etudiant");
		//afficher la vue accueil
		$this->view->afficherListeEtudiants($tab);
	}
	

	public function insererAction(){
		if(!empty($_POST)){
			//print_r($_POST);
			
			//récupérer les informations du POST
			$tab=array(
				"nom"=>$_POST["nom"],
				"prenom"=>$_POST["prenom"],
				"nas"=>$_POST["nas"],
				"codePermanent"=>$_POST["codePermanent"],
				"cours"=>$_POST["cours"]
			);

			$this->modele->getManager()->inserer("etudiant", $tab);
		}
		$this->view->insererEtudiant();		
	}
    
    public function modifierAction(){
        
        var_dump($_GET);
        $tab = $this->modele->getManager()->listerUneRangee("etudiant", $_GET['id']);
		//afficher la vue avec formulaire preramplie
		$this->view->confirmModifierEtudiant($tab);//change everywhere!!!
 
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
				"codePermanent"=>$_POST["codePermanent"],
				"cours"=>$_POST["cours"]
			);

			$this->modele->getManager()->modifier("etudiant", $tab);
		}
		$this->listerAction();	//appellation de function qui vas lister les etudiants	
	}
    
    public function supprimerAction($id){
		
			

        $this->modele->getManager()->supprimer("etudiant", $id);
		
		$this->listerAction();	//appellation de function qui vas lister les etudiants		
	}
}