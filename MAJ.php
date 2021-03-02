<!DOCTYPE html>
<html>
<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "ap";
// Create connection
$conn = new mysqli($server, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$requete = (" SELECT login, password FROM utilisateur where id=$id ");
$result = mysqli_query($conn,$requete) or die ("Echec de la requete : $requete");
$ligne = mysqli_fetch_assoc($result);
$login = $ligne['login'];
$passwordd = $ligne['password'];
?>

<form action="maj.php" method="get">
<br> id : <input type="hidden" name="id" value=<?php echo $id ?> >
<br> Login : <input type="text" name="login" value=<?php echo $login ?> >
<br> Mot de passe : <input type="text" name="pass" value=<?php echo $pass ?> >
<br><input type="submit" name= "Envoi" value="ok">
<input type="submit" name="reset" value="Effacer">
</form> 

<?php

$envoi=$_GET['Envoi'];
if ($envoi=="ok"){
    $login=$_REQUEST['login'];
    $password=$_REQUEST['pass'];
    $requete2="UPDATE utilisateur SET login='$login',password='$password' WHERE id=$id";
    mysqli_query($conn,$requete2) or die ("Echec de la requete : $requete2");
    echo "<a href='afficheUtil.php'>Retour liste</a> ";
}

?>
</html>