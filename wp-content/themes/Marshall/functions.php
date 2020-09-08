<?php
// ===========
// = LOGO DESDE WORDPRESS =
// ===========
add_theme_support('custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array('site-title', 'site-description'),
));
// ===========
// = MENU =
// ===========

// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

add_theme_support('nav-menus');
register_nav_menus(array('menu' => __('menu')));

/* FIN MENU */

add_theme_support('post-thumbnails');                // without parameter -> 'post-thumbnail'

the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('medium_large');    //Medium-large resolution (default 768px x no height limit max)
the_post_thumbnail('large');           // Large resolution (default 640px x 640px max)
the_post_thumbnail('full');            // Full resolution (original size uploaded)

the_post_thumbnail(array(100, 100));  // Other resolutions

function bootstrap_responsive_images($html)
{
	$classes = 'img-responsive'; // separated by spaces, e.g. 'img image-link'
	// check if there are already classes assigned to the anchor
	if (preg_match('/<img.*? class="/', $html)) {
		$html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
	} else {
		$html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
	}
	// remove dimensions from images,, does not need it!
	$html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
	return $html;
}
add_filter('the_content', 'bootstrap_responsive_images', 10);
add_filter('post_thumbnail_html', 'bootstrap_responsive_images', 10);
add_filter('the_field', 'bootstrap_responsive_images', 10);
