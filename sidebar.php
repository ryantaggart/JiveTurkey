<!-- Default Sidebar Content -->

<sidebar class="defaultSidebar pageSidebar">
	<?php if ( !dynamic_sidebar('Default Sidebar') ) : ?>
		<h2>Categories:</h2>
		<?php wp_list_categories('title_li='); ?>
	<?php endif; ?>
</sidebar>