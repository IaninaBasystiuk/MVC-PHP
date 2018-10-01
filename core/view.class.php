<?php

class View{
    
	public function afficherPageAccueil(){
		require "../views/commun/entette.html.php";
		require "../views/index/accueil.html.php";
        require "../views/commun/pied.html.php";
	}
	
	
	public function afficherListeEtudiants(array $tab){
		$_SESSION["tab"] = $tab;
        require "../views/commun/entette.html.php";
		require "../views/etudiant/lister.html.php";
        require "../views/commun/pied.html.php";
	}
	public function insererEtudiant(array $tab=array()){
        
        require "../views/commun/entette.html.php";
		require "../views/etudiant/inserer.html.php";
        require "../views/commun/pied.html.php";
	}		
	
    public function confirmModifierEtudiant(array $tab){
        
        require "../views/commun/entette.html.php";
		require "../views/etudiant/modifier.html.php";
        require "../views/commun/pied.html.php";
	}
    
    
    ////////////////////////////////////////////////////////////
    
    public function afficherListeEnseignants(array $tab){
		$_SESSION["tab"] = $tab;
        require "../views/commun/entette.html.php";
		require "../views/enseignant/lister.html.php";
        require "../views/commun/pied.html.php";
	}
	public function insererEnseignant(array $tab=array()){
        
        require "../views/commun/entette.html.php";
		require "../views/enseignant/inserer.html.php";
        require "../views/commun/pied.html.php";
	}		
	
    public function confirmModifierEnseignant(array $tab){
        
        require "../views/commun/entette.html.php";
		require "../views/enseignant/modifier.html.php";
        require "../views/commun/pied.html.php";
	}
    
    
    ///////////////////////////////////////////////////////////
    public function afficherFormContact(){
		require "../views/index/contact.html.php";
	}
    
	 	 
}