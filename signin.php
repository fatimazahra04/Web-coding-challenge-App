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
		echo '<meta http-equiv="refresh" content="0; URL=signin.html">';//redirection
}else{
		$requete="select * from user where mail='$mail' and password='$password'";
		$reponse=mysqli_query($mysqli,$requete);
		if(mysqli_num_rows($reponse)!=0){
		?><SCRIPT LANGUAGE="JAVASCRIPT"> alert("User successfully connected!");</SCRIPT><?php
		echo '<meta http-equiv="refresh" content="0; URL=gallery.html">';
		}else{
			?><SCRIPT LANGUAGE="JAVASCRIPT"> alert("mail or password incorrect!");</SCRIPT><?php
			echo '<meta http-equiv="refresh" content="0; URL=signin.html">';
			//echo "ok";
		}
}

?>