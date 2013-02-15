<?php get_header(); ?>
		<div id="container">
			<div id="content" role="main">
			<?php get_template_part( 'loop', 'index' ); ?>
			</div>
		</div>
<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
<?php get_footer(); ?>
