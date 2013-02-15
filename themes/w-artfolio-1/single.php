<?php get_header(); ?>

<style>
#header{position:relative}
</style>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="contentcopy"> <!-- copy -->
<span class="pagetitle"><strong><?php the_title(); ?></strong><br />
<?php the_time('Y'); ?><br /><br />
<span class="pagecontent"><?php the_content(); ?></span>
</div><!-- copy -->

<div id="Postcontent"> <!-- content -->

<div id="videoContent">
<?php if ( get_post_meta($post->ID, 'Youtube', true) ) : ?>
        <iframe class="youtube-player" type="text/html" width="640" height="385" src="http://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'Youtube', true) ?>" frameborder="0">
</iframe>
<?php endif; ?>

<?php if ( get_post_meta($post->ID, 'Vimeo', true) ) : ?>
<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta($post->ID, 'Vimeo', true) ?>?title=0&amp;byline=0&amp;portrait=0" width="600" height="271" frameborder="0"></iframe>
<?php endif; ?>
</div>

<div id="nav"><a id="prev" href="#">Previous</a><a id="next" href="#">Next</a></div>

<div id="imgcontent">

<?php my_attachment_gallery(0, 'large', 'alt="' . $post->post_title . '"'); ?>

</div>

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

<div id="relatedposts" style="display:none">
<?php $orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
$args=array(
'category__in' => $category_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=> 4, // Number of related posts that will be shown.
'caller_get_posts'=>1
);
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
echo '<span class="pagetitle"><strong>Related:</strong></span><br /><br />';
while( $my_query->have_posts() ) {
$my_query->the_post();?>

<figure>
<figcaption class="relatedcap">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</figcaption>
<div id="relatedthumb">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
</div>
</figure><br />

<div id="overlay"></div>

<?
}
echo '';
}
}
$post = $orig_post;
wp_reset_query(); ?>
</div>

<?php endwhile; // end of the loop. ?>

</div><!-- content -->
</div><!-- container -->

<?php get_footer(); ?>