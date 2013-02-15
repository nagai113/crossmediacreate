<?php

add_theme_support( 'post-thumbnails' );

add_action( 'init', 'register_my_menus' );
 
function register_my_menus() {
	register_nav_menus(
		array(
			'projects-nav' => __( 'Projects' ),
			'pages-nav' => __( 'Pages' )
		)
	);
}

function my_attachment_gallery($postid=0, $size='thumbnail', $attributes='') {
	if ($postid<1) $postid = get_the_ID();
	if ($images = get_children(array(
		'post_parent' => $postid,
		'post_type' => 'attachment',
		'order' => 'DESC',
		'numberposts' => 0,
		'post_mime_type' => 'image',)))
		foreach($images as $image) {
			$attachment=wp_get_attachment_image_src($image->ID, $size);
			?><div class="feature"><img src="<?php echo $attachment[0]; ?>" <?php echo $attributes; ?> /></div><?php
		}

}

/**
 * If more than one page exists, return TRUE.
 */
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

?>