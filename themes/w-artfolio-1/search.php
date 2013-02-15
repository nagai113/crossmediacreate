<?php get_header(); ?>

		<div id="container">
			<div id="content">

<?php if ( have_posts() ) : ?>

				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
				<div>
						Sorry, but nothing matched your search criteria...
						<?php get_search_form(); ?>
				</div><!-- #post-0 -->
<?php endif; ?>
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>