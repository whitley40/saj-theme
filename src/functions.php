<?php

// control the length of the exerpt
function saj_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'saj_excerpt_length', 999 );

// add in menu support

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {

	register_nav_menus (
		array (
				'primary-menu' => __('Primary Menu')
			)
	);

}
add_action('init', 'register_theme_menus');

//register some widgets

function saj_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>' 	
	));

}

saj_create_widget( 'Hompage Right Column', 'homepage', 'Displays on the homepage right column' );


//line up in saj styles

function saj_theme_styles() {

	wp_enqueue_style('font_oswald_css', 'http://fonts.googleapis.com/css?family=Oswald:400,300,700');

	wp_enqueue_style('font_droid_css', 'http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic');

	wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');

}

//add saj styles to WP

add_action( 'wp_enqueue_scripts', 'saj_theme_styles');


//line up in saj js

function saj_theme_js(){

	wp_enqueue_script('reponsiveslides_js', get_template_directory_uri() . '/js/libs/responsiveslides.js', array('jquery'),'', true);

	wp_enqueue_script('functions_js', get_template_directory_uri() . '/js/functions.js', array('jquery'),'', true);


}


//add saj js to WP

add_action('wp_enqueue_scripts', 'saj_theme_js');


//add in svg functionality

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');





?>
