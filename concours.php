<?php
error_reporting(E_ALL);

require_once('config/config.php');

$erreur = false;

if (isset($_POST['mail'])){

	$mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL); //Sécurisation des entrées

	if ($mail){

		$connexion = mysql_connect($serveur, $user, $password);
		mysql_select_db($base);
		$requete = "insert into emails_concours values (0, now(), '".$mail."');";
		if (!mysql_query($requete)) echo "Erreur, contactez l'administrateur";
		mysql_close($connexion);
	}
	else $erreur = true;
}
?>




<!DOCTYPE html>
<html>


<head>

	<link rel="stylesheet" href="defaut.css">
	<link rel="stylesheet" href="concours.css">	
	
	
<meta charset="UTF-8"/>	
	
<title>Ice3: le concours du jeu le plus givré de l'année</title>

	<script type="text/javascript">

		//Script pour google analytics
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-17906341-2']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>

</head>

<body>

	<a href="http://www.mywittygames.com" target="_blank"><img class="pastille_edinautes" alt="Ice3 a été édité par 436 édinautes" src="img/Pastille436Edinautes.png"/></a>
	<a href="http://www4.fnac.com/Witty-Ice-3/a4107357/w-4"><img class="coup_de_coeur_fnac" alt="Ice3 est sélectionnée par la fnac" src="img/coup_de_coeur_logo_fnac.test5.png"/></a>
	
	<div id="conteneur">

		<div id="header">
			<img class="logo_haut" alt="Logo Ice3" src="img/design_logo.png"/>
			<img class="logo_haut_texte" alt="Texte logo Ice3" src="img/texte_jeu_givre.png"/>
		</div>

		<nav>
			<a class="nav_jeu" href="index.php">
				<img class="image_bouton image_bouton_jeu" alt="Jeu Ice3" src="img/bouton_lejeu.png"/>
			</a>
			<div class="spacer"></div>
			<a class="nav_presse" href="presse.html">
				<img class="image_bouton image_bouton_presse" alt="Presse Ice3" src="img/bouton_presse.png"/>
			</a>
			<div class="spacer"></div>
			<a class="nav_contact" href="contact.html">
				<img class="image_bouton image_bouton_contact" alt="Contact Ice3" src="img/bouton_contact.png"/>
			</a>		
			<div class="spacer"></div>
			<a class="nav_concours" href="concours.php">
				<img class="image_bouton image_bouton_concours" alt="Concours Ice3" src="img/bouton_concours.png"/>
			</a>		
			<div class="spacer"></div>
			<!--<a class="nav_jeuflash" href="jeu-ice3.html">
				<img class="image_bouton image_bouton_jeuflash" alt="Jeu flash Ice3" src="img/bouton_jeuflash.png"/>
			</a>-->		
			<!--<img class="image_glacons_colles" src="img/design_glaconscolles.png"/>-->
			<div class="spacer"></div>
		</nav>
		

		<!--
		<div class="acheter_jeu">
			<a class="lien_acheter_jeu" href="">
				<img class="image_acheter" src="img/design_boutonacheter.png"/>
				<img class="image_acheter_txt_cliquez" src="img/design_cliquezici.png"/>
				<img class="image_acheter_txt_acheter" src="img/design_acheterjeu.png"/>
				<img class="image_acheter_glacon" src="img/design_glacon_acheter.png"/>
			</a>
		</div>-->

		
		<section id="contenu_haut">			
			
			<img class="texte_presentation" alt="Concours Ice3" src="img/texte_presentation_concours.png"/>
			<img class="tshirts" alt="T-shirts givrés" src="img/tshirts_givres.png"/>
			<img class="boite_ice3" alt="Boîte Ice3" src="img/boite_ice3_halo.png"/>
			
			<?php 
				if (isset($mail) && (!$erreur)) echo "<p class='erreur_mail'>Votre participation a bien été enregistrée</p>";
				else{
			?>
				<img class="texte_participation" alt="Concours Ice3" src="img/texte_participation.png"/>
				<img class="glacon_citron" alt="Glaçon citron Ice3" src="img/design_glacon_citron.png"/>

				<img class="glacons_colles" alt="Glaçons collés Ice3" src="img/glacons_colles.png"/>
				
				
				<form name="concours" action="concours.php" method="POST">
					<div class="champ_email">
						<input class="txtarea_email" type="textarea" name="mail" placeholder="Votre email"/>
						<div class="spacer"></div>
					</div>
					
					<?php if ($erreur) echo "<p class='erreur_mail'>L'adresse mail entrée est incorrecte</p>";?>

					<input class="btn_validation blue" type="submit" value="Participer"/>
				</form>
			<?php
				}
			?>
			
			<div class="spacer"></div>
		</section>
		
		<footer>
			
		</footer>

	</div>
</body>

</html>


