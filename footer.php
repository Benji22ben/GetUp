<div>
    <footer>  
		<div class="wrap">
<div class="getup">
		<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo_b.svg" alt="Logo">
		<h1 class="title-getup">GET UP</h1>
			<h4 class="together">Ensemble pour aller plus loin !</h4>	
				<p class="footer-text-small">Get Up met son savoir-faire au profit de tous, faisant le lien entre les particuliers / les organisations et les associations locales. </p>
			</div>
	<div class="center-footer">
	<p class="text-footer">Soyez informé des dernières actualités de GET UP en vous inscrivant à notre <span class="news">NEWSLETTER</span></p>
	<div class="newsletter"><p>Votre adresse mail</p></div>	
	<div class="line"></div>
	<p class="text-footer-2">Suivez nous sur nos réseaux sociaux</p>

	<nav class="rfooter">
			 <?php wp_nav_menu( array(
				"menu" => "Reseaux_footer",
			 'container' => false,
			 'menu_class' => 'menu_r',
			 ) ); ?> 
		</nav> 
			 
	<p class="Legal">Mentions légales - Données personnelles</p>
	<p class="footer-text-small-2">Votre adresse de messagerie est uniquement utilisée pour vous envoyer les lettres d'information de la CNIL. Vous pouvez à tout moment utiliser le lien de désabonnement intégré dans la newsletter.</p>
	<h4 class="all">© Get up - 2020 - Designé et produit par DUT MMI CHAMBERY</h4>
	</div>	
	<nav class="mfooter">
			 <?php wp_nav_menu( array(
				"menu" => "Footer",
			 'container' => false,
			 'menu_class' => 'menu_f',
			 ) ); ?> 
		</nav> 		
		
	</div> 
</footer>  
   
		<?php wp_footer(); ?>

	</div>
</html>