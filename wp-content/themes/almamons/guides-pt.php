<?php
function custom_post_type_blog() {
	$supports = array(
		'title', // post title
		'author', // post author
		'thumbnail', // featured images
		'custom-fields', // custom fields
		'revisions', // post revisions
		'post-formats', // post formats
		'editor',
		'comments',
	);
	$labels = array(
		'name' => __('Vodiči'),
		'singular_name' => __('Vodiči'),
		'menu_name' => 'Vodiči',
		'name_admin_bar' => 'Vodiči',
		'add_new' => 'Add Vodiči',
		'add_new_item' =>'Add Vodiči',
		'new_item' => 'New Vodiči',
		'edit_item' => 'Edit Vodiči',
		'view_item' => 'View Vodiči',
		'all_items' => 'Vodiči',
		'search_items' => 'Search Vodiči',
		'not_found' => 'No Vodiči found',
	);
	$args = array(
		'supports' 						=> $supports,
		'labels' 							=> $labels,
		'public' 							=> true,
		'show_ui' 						=> true,
		'show_in_menu' 				=> true,
		'hierarchical' 				=> false,
		'show_in_nav_menus' 	=> true,
		'publicly_queryable' 	=> true,
		'exclude_from_search' => false,
		'has_archive'					=> true,
		'query_var' 					=> true,
		'can_export' 					=> true,
		'capability_type' 		=> 'post',
    'show_in_rest' 				=> true,
	);
	register_post_type('vodici', $args);

}
add_action('init', 'custom_post_type_blog');

function my_post_type_link_filter_function($post_link, $id = 0, $leavename = FALSE) {
  if (strpos('%author%', $post_link) === FALSE) {
    $post = &get_post($id);
    return str_replace('%post_id%', $post->ID, $post_link);
  }
}
add_filter('post_type_link', 'my_post_type_link_filter_function', 1, 3);

?>