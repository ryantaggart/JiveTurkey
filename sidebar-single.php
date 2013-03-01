	<!-- Single Article Sidebar Content -->

<sidebar class="singleArticleSidebar pageSidebar">
	<?php if ( !dynamic_sidebar('Single Article Sidebar') ) : ?>
		<?php

		  //Gets category and author info
		  global $wp_query;
		$cats = get_the_category();
		$tempQuery = $wp_query;
		  $currentId = $post->ID;

		// related category posts
		  $catlist = "";
		  forEach( $cats as $c ) {
		  if( $catlist != "" ) { $catlist .= ","; }
		  $catlist .= $c->cat_ID;
		  }
		  $newQuery = "posts_per_page=5&cat=" . $catlist;
		  query_posts( $newQuery );
		$categoryPosts = "";
		  $count = 0;
		if (have_posts()) {
		  while (have_posts()) {
		  the_post();
		  if( $count<4 && $currentId!=$post->ID) {
		  $count++;
		  $categoryPosts .= '<li><a href="' . get_permalink() . '">' . the_title( "", "", false ) . '</a></li>';
		  }
		  }
		  }
		  $wp_query = $tempQuery;
		  ?>
		<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<h2>Related Articles:</h2>
		<ul><?php echo $categoryPosts; ?></ul>
		<?php endwhile;?>
		
		<h2>Categories:</h2>
		<?php wp_list_categories('title_li='); ?>
	<?php endif; ?>

</sidebar>