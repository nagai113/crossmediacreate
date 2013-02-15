    <div class="clear"></div>

    

    <div id="footer">

        

        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?>       

            <div class="footer_box">

                <h3>Latest Blog Posts</h3>

                <ul>

                  <li>Use Widget to set this up</li>

                  <li>Use Widget to set this up</li>

                  <li>Use Widget to set this up</li>

                  <li>Use Widget to set this up</li>

                  <li>Use Widget to set this up</li>

                </ul>

            </div><!--//footer_box-->

        <?php endif; ?>            

        

        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?>       

            <div class="footer_box">

                <h3>Blogroll</h3>

                <ul>

                  <li><a href="#">Use Widget to set this up</a></li>

                  <li><a href="#">Use Widget to set this up</a></li>

                  <li><a href="#">Use Widget to set this up</a></li>

                  <li><a href="#">Use Widget to set this up</a></li>

                  <li><a href="#">Use Widget to set this up</a></li>

                </ul>

            </div><!--//footer_box-->

        <?php endif; ?>            



        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?>       

            <div class="footer_box footer_box_last">

                <h3>Sample Text Widget</h3>

                <ul>

                  <li>Use Widget to set this up. Sample text box</li>

                 

                </ul>

            </div><!--//footer_box-->

        <?php endif; ?>            

        

        <div class="clear"></div>

        

        <div class="copyright_cont">

           Copyright 2012. bananafish All Rights Reserved.

        </div><!--//copyright_cont-->

        

    </div><!--//footer-->



</div><!--//main_container-->



<?php wp_footer(); ?>

</body>

</html>