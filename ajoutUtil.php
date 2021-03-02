<!DOCTYPE html>
<html>
<head>
	<title>Recuperation</title>
</head>
<body>
<?php
	$login = $_REQUEST['login'];
	$passwordd = $_REQUEST['password'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ap";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	$requete = "INSERT INTO UTILISATEUR (login, password) VALUES('$login','$passwordd')" ;
	mysqli_query($conn,$requete);

	echo "<a href='ajout_retirer.php'>Retour</a>";

?>
</body>
</html>