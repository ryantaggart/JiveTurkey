<?php


// Enqueueing Styles for the Theme
	function theme_styles() { 
	  wp_register_style( 'baseStyle', get_template_directory_uri() . '/style/style.css', array(), '1.00', 'all' );
	  
	  wp_enqueue_style( 'baseStyle' );
	}

	add_action('wp_enqueue_scripts', 'theme_styles');

// Enqueueing Scripts for the Theme
  function register_js() {
    if (!is_admin()) {
      wp_deregister_script('jquery');
      wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
      wp_register_script('site', get_template_directory_uri() . '/js/site-ck.js', 'jquery');

      wp_enqueue_script('jquery');
      wp_enqueue_script('site');
  }
}

  add_action('init', 'register_js');



// Set up Menu functionality
	if ( function_exists( 'register_nav_menus' ) ) {
		register_nav_menus(
			array(
			  'primary' => 'Primary Header Nav',  // This will be the main Nav Bar
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