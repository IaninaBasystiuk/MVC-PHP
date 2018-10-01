<?php
?>
<!doctype html>
<html>
	<head>
		<title>Pqge Liste Etudiants</title>
		<script type="text/javascript" src="js/ajax.js"></script>
	
	</head>
	<body>
       <div class="contenue">
        <h2> Insertion d'étudiant</h2>
		<h3> Voulez vous inserer nouveau étudiant?</h3>

		<form method="post" action=""> 
			<div> 
				 <p> Nom : <input type="text" name="nom"/> </p> 
				<p> Prenom : <input type="text" name="prenom"/> </p> 
				<p> NAS : <input type="text" name="nas"/> </p> 
				<p> Code permanent : <input type="text" name="codePermanent" id="codePermanent"/> 
				
				<p> Cours : <input type="text" name="cours"/> </p> 				
				
				

				  <p> <input type="submit" name="envoyer" value="Envoyer"/> 
			
			</div>
		</form>
    </div>
	</body>
<html>
