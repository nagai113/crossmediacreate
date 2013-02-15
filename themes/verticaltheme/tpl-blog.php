<?php
/*
  Template Name: Blog
*/
?>

<?php get_header(); ?>
    
    <div id="content">
    
        <?php
        $args = array(
                     'category_name' => 'blog',
                     'post_type' => 'post',
                     'posts_per_page' => 3,
                     'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                     );
        query_posts($args);
        while (have_posts()) : the_post(); ?>    
        
            <div class="blog_post_box">
            
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-post'); ?></a>
                
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                
               <p><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,570)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content; ?><?php if(strlen(strip_tags(get_the_content())) > 570) echo "..."; ?></p> 
                
                <div class="clear"></div>
            
            </div><!--//blog_post_box-->        
        
        <?php endwhile; ?>        
    
        <div class="cat_nav">
            <div class="left"><?php previous_posts_link('&lt; &lt; Previous') ?></div>
            <div class="right"><?php next_posts_link('Next &gt; &gt;') ?></div>
            <div class="clear"></div>
        </div><!--//cat_nav-->
        
    </div><!--//content-->
    
<?php get_footer(); ?>        