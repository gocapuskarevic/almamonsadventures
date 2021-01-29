<?php
//Load Stylesheets
function load_css() {
	wp_register_style('main', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
	wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

//Load JavaScript
function load_js() {
	wp_enqueue_script('jquery');
	wp_register_script('myjs', get_template_directory_uri() . '/js/script.js', array(), false, true);
	wp_enqueue_script('myjs');
}
add_action('wp_enqueue_scripts', 'load_js');

//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


//Menus
register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
	)
);

// Register Sidebars
function my_sidebars()
{
	register_sidebar(
		array(
			'name' => 'Page Sidebar',
			'id' => 'page-sidebar',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	);
}
add_action('widgets_init', 'my_sidebars');
?>