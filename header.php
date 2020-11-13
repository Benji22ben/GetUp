<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>
	<!-- Obligatoire -->
	<?php wp_head(); ?>
</head>
<header>
	<div class="wrap">
		<h1 class="Title_p">Titre du site : <?php bloginfo( 'name' ); ?></h1>
		<h2 class="description">Description du site : <?php bloginfo( 'description' ); ?></h2>
		<nav id="menuprincipal">
			<div id="legendemenuprincipal"> Menu principal</div>
			<!-- Ajout de l'accueil du site dans le menu principal -->
			<?php wp_page_menu('show_home=1'); ?>
		</nav>
		<div id=haut>
		
		</div>
	</div>
</header>