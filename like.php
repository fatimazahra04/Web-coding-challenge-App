<?php
include_once("config.php");

session_start();
$mail=$_SESSION['mail'];
echo $mail;

$recapnameshop=$_GET['test'];
$req="UPDATE user SET avis='positive' where shop='$recapnameshop' and avis='neutre'";
$resultat=mysqli_query($mysqli, $req); 
echo '<meta http-equiv="refresh" content="0; URL=preferred.php">';



//prederredshop.php
//il faut récupérer le mail
//$req3= "SELECT * from user where avis='positive' and mail= '$mail';
// N3mr les resultats t la requete f une table,boucle
?>