<?php get_header(); ?>

<!-- imgload -->
<script type="text/javascript">
	$(function () {
		$('img').hide();//hide all the images on the page
	});

	var i = 0;//initialize
	var int=0;//Internet Explorer Fix
	$(window).bind("load", function() {//The load event will only fire if the entire page or document is fully loaded
		var int = setInterval("doThis(i)",500);//500 is the fade in speed in milliseconds
	});

	function doThis() {
		var images = $('img').length;//count the number of images on the page
		if (i >= images) {// Loop the images
			clearInterval(int);//When it reaches the last image the loop ends
		}
		$('img:hidden').eq(0).fadeIn(500);//fades in the hidden images one by one
		i++;//add 1 to the count
	}
</script>
<!-- imgload -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="content">

<div id="imgcontent">
						<div class="contentcopy">
						<h1><?php the_title(); ?></h1><br />
						<?php the_content(); ?><br /><br />
<div id="relatedposts">
<?php $orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

$args=array(
'category__in' => $category_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=> 3, // Number of related posts that will be shown.
'caller_get_posts'=>1
);

$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
echo '<div id="relatedposts"><h3>Related:</h3><br />';
while( $my_query->have_posts() ) {
$my_query->the_post();?>


<div style="clear:both;margin-top:-5px;margin-bottom:7px"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>

<?
}
echo '</div>';
}
}
$post = $orig_post;
wp_reset_query(); ?>
</div>
						</div><!-- copy -->

<?php if (show_posts_nav()) : ?>
<div>
	<span><?php next_posts_link('&laquo; Older Entries'); ?></span>
	<span><?php previous_posts_link('Newer Entries &raquo;'); ?></span>
</div>
<?php endif; ?>


<?php my_attachment_gallery(0, 'large', 'alt="' . $post->post_title . '"'); ?>

<?php endwhile; // end of the loop. ?>

</div><!-- content div -->
</div><!-- container div -->