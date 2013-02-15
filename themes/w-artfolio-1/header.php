<!doctype html>
<html>
<head>
<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php bloginfo('description'); ?> / <?php bloginfo('name'); ?> <?php wp_title('/ ',true,''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.all.js"></script>

<script type="text/javascript">
$(function(){
  $('#content').masonry({
    // options
    itemSelector : '.homeThumb',
    isAnimated: true,
    columnWidth: 5
  });
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    if ( $('#imgcontent').children().length == 1 )
        $('#prev,#next').hide();
    else
        $('#imgcontent').cycle({
            fx: 'scrollHorz',
	    speed: 500,
            timeout: 0,
            next: '#next, img',
            prev: '#prev'
        });
});
</script>




<!-- imgload -->
<script type="text/javascript">
	$(function () {
		$('div#main').hide();//hide all the images on the page
	});

	var i = 0;//initialize
	var int=0;//Internet Explorer Fix
	$(window).bind("load", function() {//The load event will only fire if the entire page or document is fully loaded
		var int = setInterval("doThis(i)",200);//200 is the fade in speed in milliseconds
	});

	function doThis() {
		var images = $('div#main').length;//count the number of images on the page
		if (i >= images) {// Loop the images
			clearInterval(int);//When it reaches the last image the loop ends
		}
		$('div#main:hidden').eq(0).fadeIn(400);//fades in the hidden images one by one
		i++;//add 1 to the count
	}
</script>
<!-- imgload -->


</head>

<body>
<div id="wrapper">
<div id="searchbox" style="text-align:right;float:left">
<?php get_search_form(); ?>
</div>

<div id="header">
<div id="cat-list">

<?php wp_nav_menu (array ( 'theme_location' => 'projects-nav') ); ?>
<br />
<?php wp_nav_menu (array ( 'theme_location' => 'pages-nav') ); ?>
</div>

<div id="site-title2">
<a href="<?php bloginfo('url'); ?>">
<strong><?php bloginfo('name'); ?></strong><br />
<?php bloginfo('description'); ?>
</a><br />
</div>

</div><!-- header div -->
<div id="main">