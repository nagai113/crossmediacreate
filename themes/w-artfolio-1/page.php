<?php get_header(); ?>

<style>
#header{margin:15px 0px 0px 15px;position:relative}
</style>

		<div id="pagecontainer">
			<div id="pagecontent">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
					<?php } else { ?>
					<?php } ?>
						<span class="pagetitle"><strong><?php the_title(); ?></strong></span><br /><br />
						<span class="pagecontent"><?php the_content(); ?></span>
						<?php wp_link_pages(); ?>
				</div><!-- post divs -->
<?php endwhile; ?>
			</div><!-- pagecontent div -->

<div style="padding-top:15px;float:left">
<div style="float:left;position:absolute">
<g:plusone size="medium"></g:plusone>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</div>
<div style="float:left;padding-left:75px">
<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=178852805521262&amp;xfbml=1"></script><fb:like href="<?php the_permalink(); ?>" send="false" layout="button_count" width="0" show_faces="false" action="like" font=""></fb:like>
</div>
</div>

		</div><!-- pagecontainer div -->

<?php get_footer(); ?>