<!DOCTYPE HTML>
<?php include("fonctions.php"); ?>
<html>
	<head>
		<title>Page de traitement du formulaire</title>
		<meta charset="utf-8" />
	</head>

	<body>
		<?php
			print_r($_FILES);
			echo "Bonsoir, Monsieur " . ($_POST['nom'] . '</br>') ;
			afficherCsv($_FILES['fichier'], 1000, ",");

		?>
	</body>
</html>
