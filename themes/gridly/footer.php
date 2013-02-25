	

<?php if ( is_active_sidebar( 'gridly_footer')) { ?>     
   <div id="footer-area">
			<?php dynamic_sidebar( 'gridly_footer' ); ?>
        </div><!-- // footer area -->   
             <img src="http://crossmediacreate.com/wp-content/uploads/adband_logo_wordpress_foot.jpg" align="right">
<?php }  ?>     
      
 <div id="copyright">
 <p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?><a href="<?php echo esc_url( __('http://www.eleventhemes.com/', 'eleventhemes') ); ?>" title="Eleven WordPress Themes" target="_blank"></a></p>
 </div><!-- // copyright -->   
</div><!-- // wrap -->   

	<?php wp_footer(); ?>
	
</body>
</html>