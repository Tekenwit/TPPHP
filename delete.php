<!DOCTYPE html>
<html>
<head>
	<title>Recuperation</title>
</head>
<body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ap";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$id = $_GET["id"];
	$requete = "DELETE FROM `utilisateur` WHERE id = $id" ;
	mysqli_query($conn,$requete);

	echo "<a href='ajout_retirer.php'>Retour</a>";

?>
</body>
</html>