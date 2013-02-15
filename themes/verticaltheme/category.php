<?php get_header(); ?>
    
    <div id="content">
    
        <?php $x = 0; ?>

<?php
global $wp_query;
$args = array_merge( $wp_query->query, array( 'posts_per_page' => -1 ) );
query_posts( $args );
?>

        <?php while (have_posts()) : the_post(); ?>
        
            <?php if($x == 2) { ?>
            <div class="home_post_box home_post_box_last">
            <?php } else { ?>
            <div class="home_post_box">
            <?php } ?>        
    
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post'); ?></a>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                 <p><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,180)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content; ?><?php if(strlen(strip_tags(get_the_content())) > 180) echo "..."; ?></p> 
            </div><!--//home_post_box-->        
    
            <?php if($x == 2) { echo '<div class="clear"></div><div class="cat_divider"></div>'; $x = -1; }  ?>        
    
        <?php $x++; ?>
        <?php endwhile; ?>    
        
        <?php if($x != 0) { echo '<div class="clear"></div>'; } ?>
        
        <div class="clear"></div>
        
        <div class="cat_nav">
            <div class="left"><?php previous_posts_link('&lt; &lt; Previous') ?></div>
            <div class="right"><?php next_posts_link('Next &gt; &gt;') ?></div>
            <div class="clear"></div>
        </div><!--//cat_nav-->
        
    </div><!--//content-->
    
<?php get_footer(); ?>        