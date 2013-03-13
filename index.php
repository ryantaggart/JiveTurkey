<?php get_header(); ?>

	<div class="mainContainer pageWrap"> <!-- Full Wrapper for all of the Central Content (Not Header / Footer) -->
		<div class="mainContent"><!-- Wrapper for Left Main Content -->
		
		<?php while ( have_posts() ) : the_post(); ?>
				<article class="indexPostContainer">
					<h2 class="postTitle"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					 <div class="postMeta">
						 	<p class="postDate icon-calendar"><?php the_date(); ?></p>
						 	<p class="postCommentCount icon-chat"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></p>
					 </div>
					<?php the_post_thumbnail('index-thumb'); ?>
					<div class="postContent"><?php the_excerpt(); ?></div>
				</article>
		<?php endwhile; ?>

		</div> <!-- end of mainContent -->	
		<?php get_sidebar(); ?>

		<nav class="pageNavigation">
			<div class="newer"><?php previous_posts_link('Newer Posts') ?></div>
			<div class="older"><?php next_posts_link('Older Posts') ?></div>
		</nav>

	</div> <!-- end of mainContainer -->


<?php get_footer(); ?>
