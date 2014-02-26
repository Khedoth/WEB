<?php
function afficherCsv($nomFichier, $lgthMot, $tab) {
	if(($handle = fopen($nomFichier, "r")) !== FALSE){
		echo '<table border = 1>' ;
		while (($data = fgetcsv($handle, $lgthMot, $tab)) !== FALSE) {
			echo '<tr>' ;
			for ($i = 0; $i < count($data); $i++) {
				echo '<td>' . $data[$i] . '</td>' ;
			}
			echo "</tr>\n" ;
		}
		fclose($handle) ;
	}
}
?>
