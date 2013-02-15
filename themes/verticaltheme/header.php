<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">

<head> 

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>

	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

<![endif]-->        

  <?php wp_head(); ?>

  

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/themes/default/default.css" type="text/css" media="screen" />

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/nivo-slider.css" type="text/css" media="screen" />

  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.6.1.min.js"></script>

  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.nivo.slider.js"></script>  

</head>

<body>



<?php $shortname = "vertical"; ?>



    <script type="text/javascript">

    $(window).load(function() {

        $('#slider').nivoSlider({

        pauseTime: <?php if(get_option($shortname.'_slideshow_timeout','5000') == '') { echo '5000'; } else { echo stripslashes(stripslashes(get_option($shortname.'_slideshow_timeout','5000'))); } ?>,

        controlNav: false

        });

    });

    

    var intervalID;

    

    function slideSwitch() {

        var $active = $('#slideshow a.active');

    

        if ( $active.length == 0 ) $active = $('#slideshow a:last');

    

        var $next =  $active.next().length ? $active.next()

            : $('#slideshow a:first');

    

        $active.addClass('last-active');

    

        $next.css({opacity: 0.0})

            .addClass('active')

            .animate({opacity: 1.0}, 1000, function() {

                $active.removeClass('active last-active');

            });

        clearInterval(intervalID);

        intervalID = setInterval( "slideSwitch()", 5000 );



    }

    

    function slideSwitch_prev() {

        var $active = $('#slideshow a.active');

    

        if ( $active.length == 0 ) $active = $('#slideshow a:first');

    

        var $next =  $active.prev().length ? $active.prev() : $('#slideshow a:last');

    

        $active.addClass('last-active');

    

        $next.css({opacity: 0.0})

            .addClass('active')

            .animate({opacity: 1.0}, 1000, function() {

                $active.removeClass('active last-active');

            });

        clearInterval(intervalID);

        intervalID = setInterval( "slideSwitch()", 5000 );



    }    

    

    $(function() {

        intervalID = setInterval( "slideSwitch()", 5000 );

    });        

    </script>      



<?php if(get_option($shortname.'_custom_background_color','') != "") { ?>

<style type="text/css">

  body { background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>; }

</style>

<?php } ?>



<div id="main_container">



    <div id="header">

        <div class="social_cont">

            <?php if(get_option($shortname.'_dribbble_link','') != "") { ?>

                <a href="<?php echo get_option($shortname.'_dribbble_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/dribbble-icon.png " /></a>

            <?php } ?>

            

            <?php if(get_option($shortname.'_google_plus_link','') != "") { ?>

                <a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" /></a>

            <?php } ?>

            

            <?php if(get_option($shortname.'_twitter_link','') != "") { ?>

                <a href="<?php echo get_option($shortname.'_twitter_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" /></a>

            <?php } ?>

            

            <?php if(get_option($shortname.'_facebook_link','') != "") { ?>

                <a href="<?php echo get_option($shortname.'_facebook_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" /></a>

            <?php } ?>

            <div class="clear"></div>

        </div><!--//social_cont-->

        <div class="clear"></div>

    

        <div align="left">

            <?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>

              <a href="<?php bloginfo('url'); ?>"><img src="<?php echo stripslashes(stripslashes(get_option($shortname.'_custom_logo_url',''))); ?>" class="logo" /></a>

            <?php } else { ?>

              <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" class="logo" /></a>

            <?php } ?>        

        </div>

    </div><!--//header-->

    

    <div id="menu_container">

    
<!--
        <?php wp_nav_menu('menu=header_menu&container=false'); ?>
-->
    

        <ul>

          <li><a href="http://crossmediacreate.com/">Home</a></li>

          <li><a href="http://crossmediacreate.com/?page_id=129">Infomation</a></li>

          <li><a href="http://crossmediacreate.com/?page_id=73">Profile</a></li>

          <li><a href="http://crossmediacreate.com/?page_id=132">Live</a></li>

          <li><a href="http://crossmediacreate.com/?page_id=100">Music</a></li>

          <li><a href="http://crossmediacreate.com/?page_id=179">Movie</a></li>

          <li><a href="http://crossmediacreate.com/?page_id=121">Photography</a></li>

          <li><a href="http://crossmediacreate.com/?page_id=165">Blog</a></li>

          <li><a href="http://crossmediacreate.com/?page_id=175">T&F</a></li>

          <li><a href="http://crossmediacreate.com/?page_id=71">Contact us</a></li>

          <li><a href="http://crossmediacreate.com/?page_id=75">Links</a></li>

        </ul>

<!--
        <?php wp_nav_menu('menu=category_menu&container=false&menu_class=cat_menu'); ?>                    
-->
        

        

        <div class="clear"></div>

    </div><!--//menu_container-->