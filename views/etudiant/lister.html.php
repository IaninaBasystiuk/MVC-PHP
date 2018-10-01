<?php
?>
<!doctype html>
<html>
	<head>
		<title>Page Liste Etudiants</title>
        
	</head>
	<body>
	    <div class="contenue">
            <h1> Liste des etudiants</h1>
            <a class='button' href='?controller=etudiant&action=inserer'>Ajouter étudiant</a>
            <table style="width:100%">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th> 
                    <th>NAS</th>
                    <th>Code permanent</th>
                    <th>Cours</th>
                </tr>

                <?php

                foreach ($_SESSION["tab"] as $t){
                    echo "<tr>";
                    foreach ($t as $cle){

                        echo "<td>$cle</td>";

                    }
                    echo "<td><a class='button' href='?controller=etudiant&action=modifier&id=".$t['id']."'>Modifier</a></td>";

                    echo "<td><a class='button' onclick=\"return confirm ('Voulez vous vraiment suprimer?')\" href='?controller=etudiant&action=supprimer&id=".$t['id']."'>Supprimer</a></td>";
                    echo "</tr>";
                }



                ?>

            </table>
        </div>    
	</body>
<html>
