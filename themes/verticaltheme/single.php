<?php get_header(); ?>

    

    <div id="content">

    

        <div id="single_left">

        

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          

                <h1><?php the_title(); ?></h1>

                

                <div class="single_left_cont">

                

                <?php the_content(); ?>

                

                </div><!--//single_left_cont-->

                

                <br /><br />

                


            <?php endwhile; else: ?>

            

                <h3>Sorry, no posts matched your criteria.</h3>

            

            <?php endif; ?>    

        

            <div class="clear"></div>        

        

        </div><!--//single_left-->

        
        <?php get_sidebar(); ?>

        

        <div class="clear"></div>

        

    </div><!--//content-->

    

<?php get_footer(); ?>        