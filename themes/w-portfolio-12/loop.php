<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
<?php if(has_tag('2009')){ ?>
           <div class="postcat1">
<div id="postmeta1">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</div>

<div id="imgwrap" class="image-holder">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail('mdsize'); ?></a>
</div>

<?php } elseif (has_tag('2010')){ ?>
	   <div class="postcat2">
<div id="postmeta2">
<span id="tagmeta2">New</span></span><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</div>

<div id="imgwrap" class="image-holder">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail('lgsize'); ?></a>
</div>

<?php } elseif (has_tag('2011')){ ?>
	   <div class="postcat2">
<div id="postmeta2">
<span id="tagmeta2">New</span></span><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</div>

<div id="imgwrap" class="image-holder">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail('lgsize'); ?></a>
</div>
 <?php } else { ?>
           <div class="post">
<div id="postmeta">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</div>

<div id="imgwrap" class="image-holder">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail('smsize'); ?></a>
</div>
 <?php } ?>


 </div>

<?php endwhile; else: ?>

<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

