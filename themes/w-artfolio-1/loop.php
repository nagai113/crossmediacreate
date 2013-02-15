<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if(has_tag('featured')){ ?>

<?php } else { ?>

<div class="homeThumb">
<a href="<?php the_permalink() ?>">

<div id="figcaptionwrap">
<div class="insideCaption">
	<span class="captionTitle">
	<strong><?php the_title(); ?></strong>
	<br />
	<?php the_time('Y'); ?>
	</span>
</div>
</div>

<div id="featpost">
<?php the_post_thumbnail('thumbnail'); ?>
</div>

</a>
</div>

<?php } ?>



<?php endwhile; else: ?>

Sorry, no posts matched your criteria.

<?php endif; ?>