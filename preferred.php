<?php
include_once("config.php");
session_start();
$mail=$_SESSION['mail'];
//echo '<meta http-equiv="refresh" content="0; URL=gallery.php">';

//prederredshop.php
//il faut récupérer le mail
$req3= "SELECT * from user where avis='positive' and mail= '$mail' ";
// N3mr les resultats t la requete f une table,boucle

//$requete= "select distinct  *  from user where '".$nomtache."'=skills ";
$requete= "select distinct  *  from user where avis='positive' and mail= '$mail' "; 
$reponse = mysqli_query($mysqli,$requete) or die (mysqli_error());
    //mettre les resultats dans un tableau $l
    while($donnees = mysqli_fetch_assoc($reponse)){
        $l[]=$donnees;
    }
	?>
	<html>
    <head>
<br/><a href='javascript:self.history.back();'>Go Back</a>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='gallery.css' rel='stylesheet' type='text/css' >
    </head>
    <body>
		 <style type="text/css">
body {
  background:url(img/moun4.jpg);
}
</style>
        
			<center><h1>Here's your shop list!</h1><center>
			<div id="galerie">
	<?php
	for ( $i=0 ; $i<count($l) ; $i++){
		?>
		
            <div>
                <span class="icone"></span>
                <p><?php echo $l[$i]['shop'] ?></p>
	<img src="img/<?php print_r ($l[$i]['shop']); ?>.png" />
				<ul>
					<li><a href="remove.php?test=<?php print_r ($l[$i]['shop']); ?>">Remove</a></li>
				</ul>
            </div>
	<?php
	}	
	?>
 		
    </body>

</html>    
	
