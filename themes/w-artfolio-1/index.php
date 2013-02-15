<?php wp_enqueue_script('jquery'); ?>
<?php get_header(); ?>

		<div id="container">
			<div id="content">
			<?php get_template_part( 'loop', 'index' ); ?>
			</div>
		</div>
<div style="padding-top:15px;padding-left:15px;float:left">
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
<?php get_footer(); ?>