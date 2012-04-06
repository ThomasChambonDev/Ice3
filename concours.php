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
	<link rel="icon" type="image/png" href="img/design_glacon_acheter_ico.png" />

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
	<!-- SDK Facebook -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- Fin SDK Facebook -->

	
	<section id="outils_partage">
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js">  {lang: 'fr'}</script>
		<fb:like href="http://www.facebook.com/pages/Le-jeu-le-plus-givr%C3%A9-de-lann%C3%A9e/219069664799259" send="false" layout="box_count" width="450" show_faces="false" font="verdana"></fb:like>
		<br /><br />
		<g:plusone size="tall"></g:plusone>
		<br /><br />
		<a class="addthis_counter"></a>
		<br />
		<script type="text/javascript">
				var addthis_config = {
					 ui_language: "fr",
					 data_ga_property: 'UA-17906341-2',
					 "data_track_clickback":true
																	 
				};
		</script>
		<script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f7d6b3d4ad016ff"></script>

		<table width="50" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td height="20" width="50%" align="left"><a title="Envoyer par E-mail" class="addthis_button_email"></a> </td>
				<td width="50%" align="right"><a title="Imprimer" class="addthis_button_print"></a></td>
			</tr>
			<tr>
				<td height="20" align="left"><a title="Convertir au format PDF" class="addthis_button_pdfonline"></a> </td>
				<td align="right"><a title="Ajouter au favoris" class="addthis_button_favorites"></a></td>
			</tr>
		</table>
	</section>
	
	
	<!--<a href="concours.php"><img class="medaillon_concours" alt="Le concours givré" src="img/medaillon_concours.png"/></a>-->
	<section id="cadre_droite">
			
		<a href="http://www.mywittygames.com" target="_blank"><img class="pastille_edinautes" alt="Ice3 a été édité par 436 édinautes" src="img/Pastille436Edinautes.png"/></a>
		<a href="http://www4.fnac.com/Witty-Ice-3/a4107357/w-4"><img class="coup_de_coeur_fnac" alt="Ice3 est sélectionnée par la fnac" src="img/coup_de_coeur_logo_fnac.test5.png"/></a>
			
		<div id="bloc_social">

			<div class="likebox">
				<div id="test" class="fb-like-box" data-href="http://www.facebook.com/pages/Le-jeu-le-plus-givr%C3%A9-de-lann%C3%A9e/219069664799259" data-width="235" data-height="500" data-show-faces="true" data-stream="false" data-header="true"></div>
			</div>
		</div>
	</section>

	
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


