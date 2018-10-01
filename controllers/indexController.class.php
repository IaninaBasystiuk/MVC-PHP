<?php
//include "../core/controller.class.php";

class indexController extends Controller{
	
	//routeur
	public function doAction(){
		$controller = @$_GET["controller"];
		$action = @$_GET["action"];
		switch($controller){
			
			case "etudiant":
				$c = new etudiantController();	
				
				if($action=="lister"){
					
					$c->listerAction();
				}
				if($action=="inserer"){
					
					$c->insererAction();
				}
                if($action=="modifier"){
					
					$c->modifierAction();
				}

                if($action=="confirmModifier"){
					
					$c->apresModifications();
				}
                if($action=="supprimer"){
					
					$c->supprimerAction($_GET['id']);
				}
				
								
			break;
            case "enseignant":
				$c = new enseignantController();	
				
				if($action=="lister"){
					
					$c->listerAction();
				}
				if($action=="inserer"){
					
					$c->insererAction();
				}
                if($action=="modifier"){
					
					$c->modifierAction();
				}
                if($action=="supprimer"){
					
					$c->supprimerAction($_GET['id']);
				}
                if($action=="confirmModifier"){
					
					$c->apresModifications();
				}
                if($action=="confirmSupprimer"){
					
					$c->supprimerAction();
				}
				if($action=="estPresent"){
					
					$c->estPresentAction();
				}
								
			break;
			
		
			default:
				 $this->view->afficherPageAccueil();
			}
	}


}




