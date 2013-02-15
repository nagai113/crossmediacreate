<?php get_header(); ?>
		<div id="pagecontainer">
			<div id="pagecontent">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
					<?php } else { ?>
					<?php } ?>
					<div class="entry-content-page">
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
					</div><!-- entry-content div -->
				</div><!-- post divs -->
<?php endwhile; ?>
			</div><!-- pagecontent div -->
		</div><!-- pagecontainer div -->
<?php get_footer(); ?>
