<?php

function scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'general', get_template_directory_uri().'/css/site.css');
}

add_action( 'wp_enqueue_scripts', 'scripts' );


register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'didactique' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appaers on the left.', 'didactique' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',

) );