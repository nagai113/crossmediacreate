<!DOCTYPE html>

<html>

<head>

<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>

<link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/favicon.ico" />

<meta charset="<?php bloginfo( 'charset' ); ?>" />

 <title><?php bloginfo('description'); ?> / <?php bloginfo('name'); ?> / <?php wp_title('',true,''); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

</head>

<body>

<div id="wrapper">

	<div id="header">

		<div id="masthead">

			<div id="branding" role="banner">

				<a href="<?php bloginfo('url'); ?>" target="_self">

				<div id="site-title"></div></a>

				</<?php echo $heading_tag; ?>>

			</div><!-- branding div -->

<div id="page-list"><?php wp_nav_menu (array ( 'theme_location' => 'pages-nav') ); ?></div></div>



<div id="searchbox"><?php get_search_form(); ?></div>


<div id="bkwtag"><?php bloginfo('description'); ?><br />
&copy; <?php the_date('Y'); ?> <?php bloginfo('name'); ?><br /><a href="http://www.w-portfolio.com">Built on W&mdash;Portfolio</a></div>



<div id="cat-list">

<?php wp_nav_menu (array ( 'theme_location' => 'projects-nav') ); ?>

</div>

		</div><!-- masthead div -->

	</div><!-- header div -->



	<div id="main">