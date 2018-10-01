<?php
?>
<!doctype html>
<html>
	<head>
		<title>Page Liste Enseignant</title>
		<script type="text/javascript" src="js/ajax.js"></script>
	
	</head>
	<body>
       <div class="contenue">
        <h2> Insertion d'enseignant</h2>
		<h3> Voulez vous inserer nouveau enseignant?</h3>

		<form method="post" action=""> 
			<div> 
				<p> Nom : <input type="text" id="nom" name="nom"/> </p> 
				<p> Prenom : <input type="text" id="prenom" name="prenom"/> </p>
				<p><span id="resultat"></span></p> 
				<p> NAS : <input type="text" name="nas"/> </p> 
				<p> Cours : <input type="text" name="cours"/> </p> 				
				
				
				<p> <input type="submit" name="envoyer" value="Envoyer"/> 
			
			</div>
		</form>
    </div>
	</body>
<html>
