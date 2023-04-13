<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<title>Multimédia Internet et Communication</title>
	<?php include ("config/traitement.php")?>
</head>
<body>
	<!--header-->
		<header>
			<img src="image/logouvs.png"height="150px"width="200px">
			<img src="image/accueil.png"height="150px"width="750px">
	</header>
	<nav>
		<ul class="menuHorizontal">
			<li><a href="page/multimédia.html">Multimédia</a></li>
			<li><a href="page/internet.html">Internet</a></li>
			<li><a href="page/communication.html">Communication</a></li>
		</ul>
	</nav>
	<section>
		<aside>
			<div class="titre">ESPACE D'INSCRIPTION</div>
			<?php 
			include("view/etudiant.php")?>

		</aside>
		<article>
			<div class="titre">BIENVENU DANS LA FILIERE MIC</div>
			<marquee><img src="image/mic.jpg"height="500px"width="1000px"></marquee>
		</article>
	</section>
	<footer>
		<center><p> <style type="text/css">
		     	footer p{
		     		background-color: gray;
		     		text-decoration-color: antiquewhite;
		     	}
		     </style>
			Projet_tutoré - copyright@.sn - Université-Numérique Cheikh Hamidou Kane
			
		</p></center>
		    
	</footer>

</body>
</html>