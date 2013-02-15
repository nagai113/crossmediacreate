<?php get_header(); ?>
    
    <div id="content">
    
        <?php while (have_posts()) : the_post(); ?>
        
            <div class="blog_post_box">
            
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-post'); ?></a>
                
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                
                <p><?php echo substr(strip_tags(get_the_content()),0,575); ?>...</p>
                
                <div class="clear"></div>
            
            </div><!--//blog_post_box-->        
        
        <?php endwhile; ?>        
        
    </div><!--//content-->
    
<?php get_footer(); ?>