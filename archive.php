<?php
/*
* Category Page
*/
get_header(); ?>

	<div class="mainContainer pageWrap"> <!-- Full Wrapper for all of the Central Content (Not Header / Footer) -->
		<div class="pageTitleContainer">
			<h1 class="pageTitle">Category: <?php single_cat_title(); ?></h1>
		</div>


		<div class="mainContent"><!-- Wrapper for Left Main Content -->

			<div class="pageTitleContainer"></div>

			<article class="indexPostContainer">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="postContent">
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<?php the_post_thumbnail('index-thumb'); ?>
						<p><?php the_excerpt(); ?></p>
				 </div>
				 <div class="postMeta">
				 	<p class="postDate">Posted on: <?php the_date(); ?></p>
				 	<p class="postCommentCount"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></p>
				 </div>
				<?php endwhile; ?>
			</article>

		</div> <!-- end of mainContent -->	
		<?php get_sidebar(); ?>
	</div> <!-- end of mainContainer -->

<?php get_footer(); ?>
