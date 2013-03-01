<?php


// Enqueueing Styles for the Theme
	function theme_styles() { 
	  wp_register_style( 'baseStyle', get_template_directory_uri() . '/style/style.css', array(), '1.00', 'all' );
	  wp_register_style( 'singleStyle', get_template_directory_uri() . '/style/single.css', array(), '1.00', 'all' );
	  wp_register_style( 'indexStyle', get_template_directory_uri() . '/style/index.css', array(), '1.00', 'all' );

	  wp_enqueue_style( 'baseStyle' );
	  if(is_single()) {	wp_enqueue_style( 'singleStyle' ); }
	  if(is_front_page()) {	wp_enqueue_style( 'indexStyle' ); }

	}

	add_action('wp_enqueue_scripts', 'theme_styles');

// Set up Menu functionality
	if ( function_exists( 'register_nav_menus' ) ) {
		register_nav_menus(
			array(
			  'primary' => 'Primary Header Nav',
			)
		);
	}

// Replace [...] with Read More
	function new_excerpt_more($more) {
	       global $post;
		return ' <a class="readMoreLink" href="'. get_permalink($post->ID) . '"> Read More</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

// Add Thumbnail Support
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'index-thumb', 9999, 150, true );

// Register Widgets
  register_sidebars(3, array('name'=>'Footer %d'));
  register_sidebars(1, array('name'=>'Single Article Sidebar'));
  register_sidebars(1, array('name'=>'Default Sidebar'));




?>