<!DOCTYPE html>
<?php
include_once("config.php");
$mail=$_GET['mail'];
session_start();
$_SESSION['mail'] = $mail;
?>
<html>
    <head>

		<a href="gallery.php">Nearby Shops</a>
		<a href="preferred.php">My liked Shops</a>
		
	
        
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
        
			<h1>Here's your shop list!</h1>
			<div id="galerie">
            <div>
                <span class="icone"></span>
                <p>shop 1</p>
                <img src="img/im.png" />
				<ul>
					<li><a href="like.php?test=shop1">Like</a></li>
					<li><a href="dislike.html">Dislike</a></li>
				</ul>
            </div>
            <div>
                <span class="icone"></span>
                <p>shop 2</p>
                <img src="img/im.png" />
				<ul>
					<li><a href="like.php?test=shop2">Like</a></li>
					<li><a href="dislike.html">Dislike</a></li>
				</ul>
            </div>
            <div>
                <span class="icone"></span>
                <p>shop 3</p>
                <img src="img/im.png" />
				<ul>
					<li><a href="like.php?test=shop3">Like</a></li>
					<li><a href="dislike.html">Dislike</a></li>
				</ul>
            </div>
            <div>
                <span class="icone"></span>
                <p>shop 4</p>
                <img src="img/im.png" />
				<ul>
					<li><a href="like.php?test=shop4">Like</a></li>
					<li><a href="dislike.html">Dislike</a></li>
				</ul>
            </div>
            <div>
                <span class="icone"></span>
                <p>shop 5</p>
                <img src="img/im.png" />
				<ul>
					<li><a href="like.php?test=shop5">Like</a></li>
					<li><a href="dislike.html">Dislike</a></li>
				</ul>
            </div>
            <div>
                <span class="icone"></span>
                <p>shop 6</p>
                <img src="img/im.png" />
				<ul>
					<li><a href="like.php?test=shop6">Like</a></li>
					<li><a href="dislike.html">Dislike</a></li>
				</ul>
            </div>
            <div>
                <span class="icone"></span>
                <p>shop 7</p>
                <img src="img/im.png" />
				<ul>
					<li><a href="like.php?test=shop7">Like</a></li>
					<li><a href="dislike.html">Dislike</a></li>
				</ul>
            </div>
            <div>
                <span class="icone"></span>
                <p>shop 8</p>
                <img src="img/im.png" />
				<ul>
					<li><a href="like.php?test=shop8">Like</a></li>
					<li><a href="dislike.html">Dislike</a></li>
				</ul>
            </div>
			 <div>
                <span class="icone"></span>
                <p>shop 9</p>
                <img src="img/im.png" />
				<ul>
					<li><a href="like.php?test=shop9">Like</a></li>
					<li><a href="dislike.html">Dislike</a></li>
				</ul>
            </div>
        </div>
		</center>
    </body>
</html>
