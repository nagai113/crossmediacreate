        <div id="sidebar">

        

            <?php

            $args = array(

                         'post_type' => 'post',

                         'posts_per_page' => 3,

                         'orderby' => 'rand'

                         //'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),

                         );

            query_posts($args);

            while (have_posts()) : the_post(); ?>

        
<!--
            <div class="side_post_box">

                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post'); ?></a>

                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                <p><?php echo substr(strip_tags(get_the_content()),0,180); ?></p>

            </div><!//side_post_box-->
    

            <?php endwhile; ?>

            <?php wp_reset_query(); ?>        

        

        </div><!--//sidebar-->