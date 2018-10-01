<?php
?>
<!doctype html>
<html>
	<head>
		<title>Page Liste Enseignants</title>
        
	</head>
	<body>
	    <div class = "contenue">
            <h1> Liste des enseignants</h1>
            <a class='button' href='?controller=enseignant&action=inserer'>Ajouter enseignant</a>
            <table style="width:100%">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th> 
                    <th>NAS</th>
                    <th>Cours</th>
                </tr>

                <?php

                foreach ($_SESSION["tab"] as $t){
                    echo "<tr>";
                    foreach ($t as $cle){

                        echo "<td>$cle</td>";

                    }
                    echo "<td><a class='button' href='?controller=enseignant&action=modifier&id=".$t['id']."'>Modifier</a></td>";

                    echo "<td><a class='button' onclick=\"return confirm ('Voulez vous vraiment suprimer?')\" href='?controller=enseignant&action=supprimer&id=".$t['id']."'>Supprimer</a></td>";
                    echo "</tr>";
                }



                ?>

            </table> 
        </div>   
	</body>
<html>
