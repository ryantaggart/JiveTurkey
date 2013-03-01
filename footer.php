			<footer class="pageFooter pageWrap">
				<div class="footerSection">
					<?php if ( !function_exists('dynamic_sidebar') || 
						!dynamic_sidebar('Footer 1') ) : ?>
					<?php endif; ?>
				</div>

				<div class="footerSection middleSection">
					<?php if ( !function_exists('dynamic_sidebar') || 
						!dynamic_sidebar('Footer 2') ) : ?>
					<?php endif; ?>
				</div>

				<div class="footerSection">
					<?php if ( !function_exists('dynamic_sidebar') || 
						!dynamic_sidebar('Footer 3') ) : ?>
					<?php endif; ?>
				</div>

				<div class="copyrightContainer">
					<p>Copyright <?php echo date('Y'); ?>  |  All Rights Reserved</p>
				</div>
				
			</footer>
				
		<?php wp_footer(); ?>

	</body>

</html>
