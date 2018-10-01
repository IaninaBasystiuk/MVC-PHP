<?php
?>
<!doctype html>
<html>
	<head>
		<title>Pqge Liste Etudiants</title>
		<script type="text/javascript" src="js/ajax.js"></script>
	
	</head>
	<body>
    <div class = "contenue">
            <h2> Modification d'étudiant</h2>
            <h3> Voulez vous modifier les données?</h3>


            <section >
                <form method='post' action='?controller=etudiant&action=confirmModifier&id=<?php echo $tab['id']?>'>
                    <p>ID : <input type='text' name='id' value='<?php echo $tab['id']?>' ></p>
                    <p>Nom : <input type='text' name='nom' value='<?php echo $tab['nom']?>' ></p>
                    <p>Prenom : <input type='text' name='prenom' value='<?php echo $tab['prenom']?>' ></p>
                    <p>NAS : <input type='text' name='nas' value='<?php echo $tab['nas']?>' ></p>
                    <p>Code permanen : <input type='text' name='codePermanent' value='<?php echo $tab['codePermanent']?>' ></p>
                    <p>Cours : <input type='text' name='cours' value='<?php echo $tab['cours']?>' ></p>

                    <p><button type='submit'>Mettre à jour</button><button type='reset'><a href='?controller=etudiant&action=lister'>Annuler</a></button>  </p>
                </form>

            </section>
    </div>
	</body>
<html>