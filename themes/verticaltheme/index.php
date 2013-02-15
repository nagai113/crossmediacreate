<?php get_header(); ?>



    <?php $shortname = "vertical"; ?>

    

    <?php if(get_option($shortname.'_disable_slideshow','') != "Yes") { ?>



    <div id="slider_container">

      <div id="slideshow">

<img src="http://crossmediacreate.com/wp-content/uploads/bananafish_top1.jpg" class="slide_img wp-post-image">

<img src="http://crossmediacreate.com/wp-content/uploads/banana_CD_2.jpg"  class="slide_img wp-post-image">

<img src="http://crossmediacreate.com/wp-content/uploads/banana_quattro.jpg"  class="slide_img wp-post-image">
          

          <?php

          $slider_arr = array();

          $args = array(

                       //'category_name' => 'blog',

                       'post_type' => 'post',

                       'meta_key' => 'ex_show_in_slideshow',

                       'meta_value' => 'Yes',

                       'posts_per_page' => 10

                       //'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),

                       );

          query_posts($args);

          $y = 0;

          while (have_posts()) : the_post(); ?>

          

          <?php if($y == 0) { ?>

          <a href="<?php the_permalink(); ?>" class="active">

          <?php } else { ?>

          <a href="<?php the_permalink(); ?>">

          <?php } ?>

          

          <?php the_post_thumbnail('featured-slideshow',array('alt' => '', 'class' => 'slide_img', 'title' => '')); ?></a>

          

          <?php array_push($slider_arr,get_the_ID()); ?>

          <?php $y++; ?>

          <?php endwhile; ?>

          <?php wp_reset_query(); ?>

          

<!--              <img src="<?php //bloginfo('stylesheet_directory'); ?>/images/slider.png" alt="" />

              <img src="<?php //bloginfo('stylesheet_directory'); ?>/images/slider.png" alt="" />

              <img src="<?php //bloginfo('stylesheet_directory'); ?>/images/slider.png" alt="" />-->



      </div><!--//slideshow-->

      <a href="javascript:void(0)" onclick="slideSwitch_prev()" style="display: block;"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/slide-prev.png" class="slide_prev" /></a>

      <a href="javascript:void(0)" onclick="slideSwitch()" style="display: block;"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/slide-next.png" class="slide_next" /></a>            

    </div><!--//slider_container-->




<div id="content">
    <?php } ?>
</div>
    
<!--
<dl class="feed">
<?php $posts = get_posts('numberposts=5&order=desc');
foreach($posts as $post): ?>
<dd><span class="day"><?php echo date("Y年m月d日", strtotime($post->post_date)); ?></span><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a>
</dd>
<?php endforeach; ?>
</dl>
-->

<h2>最新情報！</h2>
<?php the_content();?>


    <div class="clear"></div>

    
<!--//content-->

    

<?php get_footer(); ?>        