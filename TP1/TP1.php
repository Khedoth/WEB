<!DOCTYPE HTML>
<html>
	<head>
		<title>TP_PHP1</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<head>
	<body>
		<?php
			$nom = "Bond";
			$prenom = "James";
			echo 'Méthode 1 : utiliser "echo" : </br>';
			echo 'Nom : '. $nom . ' Prénom : ' . $prenom . '</br>';
			echo '</br> Méthode 2 utiliser "print" : </br>';
			print "Nom : $nom Prénom : $prenom" ;
		?>
		<p>Méthode 3 : utiliser les balise HTML : <br/>
		Nom : Bond Prénom : James</p>

		<?php
			echo 'Jours de la semaine : utilisation d\'un tableau </br>' ;
			echo '</br> Utilisation de <strong>foreach</strong> : </br>' ;
			$jours = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche") ;
			foreach ($jours as $jour) {
				echo $jour . '</br> ';
			}

			echo '</br>Utilisation de <strong>print_r</strong> : </br>' ;
			print_r($jours);
			echo '</br>';
		?>

		<?php
		echo '</br></br>' ;
			$table10 = array() ;
			for($i = 0; $i < 10; $i++) {
				$table10[$i] = array();
				$table10[$i][0] = $i+1;
				for($j = 1; $j < 10; $j++) {
					$table10[$i][$j] = $table10[$i][0]*($j+1);
				}
			}
			print_r($table10) ;

			echo '</br><strong>Table de multiplication de 1 à 10</strong> : </br></br>' ;
			function affichageTableau2D($tab) {
				echo '<table border =\'1\'>';

				foreach($tab as $clef=>$table) {
					echo '<tr><th>' . ($clef+1) . '</th>' ;
					foreach($table as $clef2 => $val) {
						echo '<td>' . $val . '</td>';
					}
					echo '</tr>';
				}

				echo '</table>';
			}

			affichageTableau2D($table10);

			function affichageTableau($t){
				foreach ($t as $value){

				}
			}

			echo '<h2> Menu </h2>' ;

			$menu = array(
				"Sandwich jambon beurre",
				"Sandwich complet",
				"Sandwich thon mayonnaise",
				"Sandwich saumon",
				"Sandwich américain",
				"Sandwich poulet tex-mex");
			affichageTableau($menu);
		?>
	</body>
</html>
