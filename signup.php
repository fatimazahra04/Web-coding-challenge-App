<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head> 

<body>
<?php
//including the database connection file
include_once("config.php");
$mail=$_POST['mail'];
$password=$_POST['password'];

if(empty($_POST['mail']) || empty($_POST['password']) ){
	?><SCRIPT LANGUAGE="JAVASCRIPT"> alert("You must fill in the fields!"); </SCRIPT><?php
		echo '<meta http-equiv="refresh" content="0; URL=signup.html">';//redirection
}else{
	$requete= "select * from user where mail='$mail'";
	$resultat=mysqli_query($mysqli, $requete) or die ("failure to execute the request<br>." .mysqli_error());
	if(mysqli_num_rows($resultat)!=0){
		$data=mysql_fetch_object($resultat);
		echo '<body onLoad="alert(\'User already exists!\')">';
		echo '<meta http-equiv="refresh" content="0;URL=signup.php">';
	}
	else{
		$l= ["shop1","shop2","shop3"];
		for ($i = 0; $i<3 ; $i++ ){ 
		$requete="INSERT INTO user(mail,password,id,shop,avis) VALUES('$mail', '$password', '', '".$l[$i]."','neutre') ";
		//$requete="INSERT INTO user(avis,id,mail,password,shop) VALUES('', '','$mail', '$password', ".$l[$i]."',''  ) ";
		
		$reponse=mysqli_query($mysqli,$requete);
		}
		?><SCRIPT LANGUAGE="JAVASCRIPT"> alert("User successfully registered!");</SCRIPT><?php
		echo '<meta http-equiv="refresh" content="0; URL=signin.html">';
		}
}
?>