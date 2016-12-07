<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Dosmoz form</title>
	<link rel="stylesheet" type="text/css" href="stylesheet/form.css">
</head>
<body>
	<?php 
		include 'modele/connexion.php';//Connexion à la page de donnée.
	?>
		
	<div class="container"><!--Creation de l'unique section de la page.-->

		<img  class="logo" src=images/logo_dosmoz.jpg alt="Background de la page de connexion.">
		<!--Ajout des boutons de connexion et d'inscription.-->
		<div>
		  <button id="signin-button">Connexion</button>
		  <button id="signup-button">Inscription</button>
		</div>
		<!--Ajout des formulaires.-->
		<div>
			<form id="signup-form" method="post" action="index.php">
		      <input type="text" placeholder="NOM" name="nom"/>
			  <input type="text" placeholder="PRENOM" name= "prenom"/>
			  <input type="email" placeholder="EMAIL" name="email"/>
		      <input type="password" placeholder="PASSWORD" name="password"/>
		      <input type="text" placeholder="NUMERO" name="numero" />
		      <input type="text" placeholder="PAYS" name="pays"/>
		      <input type="text" placeholder="VILLE" name="ville"/>
		      <input type="text" placeholder="CODE POSTALE" name="code_postale"/>
		      <input type="text" placeholder="ADRESSE" name="adresse"/>
			  <button type="button" name="signup-valider" class="submit-button">Sign Up</button> 
		  </form>

		  <form id="signin-form">
				<input type="email" placeholder='EMAIL' name="email"/>
				<input type="password" placeholder="PASSWORD" name="password"/>
				<button type="button" name="signin-valider"class="submit-button">Sign In</button>
		  </form>

		</div>

	</div>

  	<script tpye="text/javascript" src="http://code.jquery.com/jquery.js"></script>
	<script type="text/javascript" src="stylesheet/form.js"></script>
</body>

</html>
