<?php get_header(); ?>

	<div class="mainContainer pageWrap">
		<div class="mainContent">
			<?php while ( have_posts() ) : the_post(); ?>
			 <h1 class="pageTitle"><?php the_title(); ?></h1>
			 <div class="pageContent">
			 	<?php the_content(); ?>
			 </div>
			<?php endwhile; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
