<?php
include_once("config.php");
$recapnameshop=$_GET['test'];
session_start();
$mail=$_SESSION['mail'];
echo $mail;
$req="delete from user where shop='".$recapnameshop."' and mail='".$mail."' ";
$rep=mysqli_query($mysqli, $req);
echo '<meta http-equiv="refresh" content="0; URL=preferred.php">';



?>