<!DOCTYPE html>
<html>


<head>

	<link rel="stylesheet" href="defaut.css">
	<link rel="stylesheet" href="jeu.css">	
	
	
<meta charset="UTF-8"/>	
	
<title>Ice3, le jeu le plus givré de l'année</title>

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

	<div id="conteneur">
	
		<div id="header">
			<img class="logo_haut" src="img/design_logo.png"/>
		</div>

	
		<nav>
			<a class="nav_jeu" href="index.php">
				<img class="image_bouton image_bouton_jeu" src="img/bouton_lejeu.png"/>
			</a>
			<div class="spacer"></div>
			<a class="nav_presse" href="presse.html">
				<img class="image_bouton image_bouton_presse" src="img/bouton_presse.png"/>
			</a>
			<div class="spacer"></div>
			<a class="nav_contact" href="contact.html">
				<img class="image_bouton image_bouton_contact" src="img/bouton_contact.png"/>
			</a>			
			<img class="image_glacons_colles" src="img/design_glaconscolles.png"/>
			<div class="spacer"></div>
			
		</nav>
		

		
		<div class="acheter_jeu">
			<a class="lien_acheter_jeu" href="">
				<img class="image_acheter" src="img/design_boutonacheter.png"/>
				<img class="image_acheter_txt_cliquez" src="img/design_cliquezici.png"/>
				<img class="image_acheter_txt_acheter" src="img/design_acheterjeu.png"/>
				<img class="image_acheter_glacon" src="img/design_glacon_acheter.png"/>
			</a>
			<a class="" href="">
				<img class="image_boite" src="img/boite_ice3_halo.png"/>
			</a>
		</div>

		
		<section id="contenu_haut">			
			<div class="conteneur_video_accroche">
				<div class="video_container">
					<iframe class="video_presentation" width="576" height="324" src="http://www.dailymotion.com/embed/video/xpjl8g?logo=0&hideInfos=1&forcedQuality=hd720"></iframe>
				</div>
				<img class="accroche" src="img/accroche.png"/>
			</div>
			
		</section>
		
		<section id="fond_contenu_bas">
		
			<section id="contenu_bas">
				<section id="regles">

					<section id="but_du_jeu">
						<h2>Comment jouer au jeu le plus givré de l'année:</h2>
						
						<p>Amenez votre glaçon à la fin du parcours givré!</p>

						<div class="cartes_extremes">
							<div class="depart carte_extreme">
								<p class="verre">Votre glaçon est en train de fondre dans le verre!</p>
								<img class="carte verre" src="img/verre.jpg"/>
							</div>
							<img class="fleche" src="img/fleche_google.png"/>
							<div class="arrivee carte_extreme">
								<p class="bac_a_glacons">Aidez-le à retrouver la douce froideur de son bac à glaçons!</p>
								<img class="carte bac_a_glacons" src="img/bac_a_glace.jpg"/>
							</div>
							
							<div class="spacer"></div>
						</div>
						
						<p>Attention car les autres joueurs vont tout tenter pour le faire fondre!</p>
						<div class="spacer"></div>
					</section>

					<section id="flashContent" class="tutoriel">
						<h2>Le tutoriel !</h2>
						<p>L'explication des règles</p>
					
						<div id="tuto_container">
							<object id="tuto_flash" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="600" height="600" id="wice3-2012_03_21" align="middle">
								<param name="movie" value="wice3-2012_03_21.swf" />
								<param name="quality" value="high" />
								<param name="bgcolor" value="#999999" />
								<param name="play" value="true" />
								<param name="loop" value="true" />
								<param name="wmode" value="window" />
								<param name="scale" value="showall" />
								<param name="menu" value="true" />
								<param name="devicefont" value="false" />
								<param name="salign" value="" />
								<param name="allowScriptAccess" value="sameDomain" />
								<!--[if !IE]>-->
								<object type="application/x-shockwave-flash" data="img/tuto_ice3.swf" width="600" height="600">
									<param name="movie" value="wice3-2012_03_21.swf" />
									<param name="quality" value="high" />
									<param name="bgcolor" value="#999999" />
									<param name="play" value="true" />
									<param name="loop" value="true" />
									<param name="wmode" value="window" />
									<param name="scale" value="showall" />
									<param name="menu" value="true" />
									<param name="devicefont" value="false" />
									<param name="salign" value="" />
									<param name="allowScriptAccess" value="sameDomain" />
								<!--<![endif]-->
									<a href="http://www.adobe.com/go/getflash">
										<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
									</a>
								<!--[if !IE]>-->
								</object>
								<!--<![endif]-->
							</object>
						</div>
					</section>
					
					<section id="attaques">
						<h2>Les attaques en images</h2>
						<p>Chaque attaque va réduire la taille de votre glaçon! Evitez-les à tout prix!</p>
						
						<div class="attaque">
							<img class="carte impair" src="img/Dragon.jpg"/>
							<img class="attaque_olivier" src="img/olivier_dragon.png"/>
							<img class="carte carte_defense impair" src="img/pompier.jpg"/>
						</div>				
						<div class="attaque">
							<img class="carte pair" src="img/Sauna.jpg"/>
							<img class="attaque_olivier" src="img/olivier_sauna.png"/>
							<img class="carte carte_defense pair" src="img/igloo.jpg"/>
						</div>				
						<div class="attaque">
							<img class="carte impair" src="img/lustrage.jpg"/>
							<img class="attaque_olivier" src="img/olivier_lustrage.png"/>
							<img class="carte carte_defense impair" src="img/boule_a_neige.jpg"/>
						</div>				
						<div class="attaque">
							<img class="carte pair" src="img/piscine.jpg"/>
							<img class="attaque_olivier" src="img/olivier_piscine.png"/>
							<img class="carte carte_defense pair" src="img/bouee.jpg"/>
						</div>				
						<div class="attaque">
							<img class="carte impair" src="img/Acide.jpg"/>
							<img class="attaque_olivier" src="img/olivier_acide.png"/>
							<img class="carte carte_defense impair" src="img/chimiste.jpg"/>
						</div>				
						<div class="attaque">
							<img class="carte pair" src="img/Sel.jpg"/>
							<img class="attaque_olivier" src="img/olivier_sel.png"/>
							<img class="carte carte_defense pair" src="img/intouchable.jpg"/>
						</div>
						<div class="spacer"></div>
					</section>
					
					
					<!--<section id="autres_cartes">-->
						
						<!--<h2>Les autres cartes</h2>-->
						
						<!--
						<section id="cartes_defenses">
						
							<h2>Les cartes de défense</h2>
						
							<img class="carte carte_defense carte_defense_1" src="img/pompier.jpg"/>
							<img class="carte carte_defense carte_defense_2" src="img/igloo.jpg"/>
							<img class="carte carte_defense carte_defense_3" src="img/boule_a_neige.jpg"/>
							<img class="carte carte_defense carte_defense_4" src="img/bouee.jpg"/>
							<img class="carte carte_defense carte_defense_5" src="img/chimiste.jpg"/>
							<img class="carte carte_defense carte_defense_6" src="img/intouchable.jpg"/>
							
							<div class="spacer"></div>
						</section>
						-->
						
					<section id="cartes_mouvements">
					
						<h2>Les cartes de mouvement</h2>
					
						<p>Faîtes avancer ou reculer votre glaçon ou celui des autres! </p>
					
						<img class="carte carte_mouvement carte_mouvement_1" src="img/+1.jpg"/>
						<img class="carte carte_mouvement carte_mouvement_2" src="img/+2.jpg"/>
						<img class="carte carte_mouvement carte_mouvement_3" src="img/+3.jpg"/>
						<img class="carte carte_mouvement carte_mouvement_4" src="img/+4.jpg"/>
						<img class="carte carte_mouvement carte_mouvement_5" src="img/+5.jpg"/>
						<img class="carte carte_mouvement carte_mouvement_6" src="img/-1.jpg"/>
						<img class="carte carte_mouvement carte_mouvement_7" src="img/-2.jpg"/>
						
						<div class="spacer"></div>
					</section>
						
					<!--	<div class="spacer"></div>					
					</section>-->
					
					<section id="parcours">
						<h2>Le parcours</h2>
						<p>Chaque carte que vous jouez vient compléter le parcours!</p>
						<img class="parcours" src="img/parcours.png"/>
						
						<div class="spacer"></div>
					</section>
				</section>
				
				<section id="contenu_boite">

					<h2>Contenu de la boîte</h2>
					<p>Ce que vous trouverez à l'intérieur</p>
					<a class="lien_acheter_jeu_bas_de_page" href="">
						<img class="image_acheter" src="img/design_boutonacheter.png"/>
						<img class="image_acheter_txt_cliquez" src="img/design_cliquezici.png"/>
						<img class="image_acheter_txt_acheter" src="img/design_acheterjeu.png"/>
						<img class="image_acheter_glacon" src="img/design_glacon_acheter.png"/>
					</a>
					<ul class="contenu_boite">
						<li class="element_avec_illustration">
							- 5 supports à glaçon de couleur (gobelet + porte-glaçon)<img class="contenu_gobelet" src="img/gobelet.png"/>x5
						</li>
						<li>- 2 pipettes de 3ml <img class="contenu_pipette" src="img/pipette.png"/>x2</li>
						<li>- Une cuillère</li>
						<li>- 108 cartes dont:</li>
						<ul class="decomposition_cartes">
							<li>- 6 cartes "Memo"</li>
							<li>- 1 carte "Verre" pour le départ</li>
							<li>- 1 carte "Bac à glaçons" pour l'arrivée</li>
							<li>- 44 cartes "Mouvement"</li>
							<li>- 28 cartes "Attaque"</li>
							<li>- 28 cartes "Défense"</li>
						</ul>
					</ul>
					
				</section>
				
			</section>

		</section>
		
		<footer>
			<img class="accroche_footer" src="img/accroche.png"/>
		</footer>

	</div>
</body>

</html>


