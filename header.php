<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8" />   
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>
	<!-- Obligatoire -->
		<?php wp_head(); ?>
</head>
	<header>


	<nav class="reseaux">
			<?php wp_nav_menu( array(
				"menu" => "Reseaux",
			 'container' => false,
			 'menu_class' => 'menu',
			 ) ); ?>
		</nav>
					<!-- Ajout de l'accueil du site dans le menu principal -->
		
		<nav class="menu">
			 <?php wp_nav_menu( array(
				"menu" => "Menu",
			 'container' => false,
			 'menu_class' => 'menu',
			 ) ); ?> 
		</nav> 
</header>