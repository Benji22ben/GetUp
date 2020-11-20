<?php


register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );
function css() {
	
	// link of the different stylesheets

	wp_enqueue_style( 'general', get_template_directory_uri().'/css/normalize.css');
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'header', get_template_directory_uri().'/css/header.css');
	wp_enqueue_style( 'footer', get_template_directory_uri().'/css/footer.css');
}

	add_action( 'wp_enqueue_scripts', 'css' );
	add_theme_support( 'title-tag' );

	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'didactique' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appaers on the left.', 'didactique' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
) );
 
		// add menu option 
	
		function register_menus(){

			register_nav_menus(
				array(
					'header-menu' => _('Menu du Header'),
					'social-menu' => _('Réseaux Sociaux'),
					'footer-menu' => _('Menu Footer'),  
					'footer-reseaux' => _('Reseaux Footer'), 
				)
			); 
	}
		add_action('init', 'register_menus');
