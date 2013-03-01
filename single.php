<?php get_header(); ?>

	<div class="mainContainer pageWrap"> <!-- Full Wrapper for all of the Central Content (Not Header / Footer) -->
		<div class="mainContent"><!-- Wrapper for Left Main Content -->

			<article class="singleArticle">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="postContentContainer">
						<h1 class="postTitle"><?php the_title(); ?></h1>

						<div class="postMeta">
							<p class="postDate">Posted on: <?php the_date(); ?></p>
							<p class="postCommentCount"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></p>
							<?php echo get_the_category_list(); ?>
						</div>

						<?php the_post_thumbnail(); ?>

						<div class="postContent"><?php the_content(); ?></div>
				 </div>
				<?php endwhile; ?>
			</article>

		</div> <!-- end of mainContent -->	
		<?php get_sidebar('single'); ?>
	</div> <!-- end of mainContainer -->

	<div class="authorInfo pageWrap">
		<p>Written By: <?php the_author(); ?></p>
	</div>

<section class="commentContainer pageWrap">
	<div class="commentContent" id="commentContent">
		<?php comments_template( '', true ); ?>
	</div>
</section>

<?php get_footer(); ?>
