<!doctype html>  

<!-- IE Shenanigans -- >
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- IE Google Chrome Embarasser -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- Mobile Friendly / Responsive Stuff -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		
		<?php wp_head(); ?>



	</head>
	
	<body <?php body_class(); ?>>
	
	<header class="siteHeader">
		<h1 class="logo">
			<a href="/">Jive Turkey</a>
		</h1>

		<nav class="siteNavigation">
			<h3 class="navToggle icon-list" id="navToggle">Navigation</h3>
			<?php wp_nav_menu('primary'); ?>
		</nav>

	</header>
