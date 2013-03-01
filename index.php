<?php get_header(); ?>

	<div class="mainContainer pageWrap"> <!-- Full Wrapper for all of the Central Content (Not Header / Footer) -->
		<div class="mainContent"><!-- Wrapper for Left Main Content -->
		
		<ul class="indexRecentPostList postList">
			<article class="indexPostContainer">
				<?php while ( have_posts() ) : the_post(); ?>
						<h2 class="postTitle"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<?php the_post_thumbnail('index-thumb'); ?>
						<div class="postContent"><?php the_excerpt(); ?></div>
					 <div class="postMeta">
						 	<p class="postDate">Posted on: <?php the_date(); ?></p>
						 	<p class="postCommentCount"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></p>
					 </div>
				<?php endwhile; ?>
			</article>
		</ul>

		</div> <!-- end of mainContent -->	
		<?php get_sidebar(); ?>
	</div> <!-- end of mainContainer -->

<?php get_footer(); ?>
