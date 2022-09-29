<?php

add_filter('query_vars', 'add_state_var', 0, 1);

function add_state_var($vars){
	$vars[] = 'state';
	return $vars;
}

add_rewrite_rule('^stores/([^/]+)/?$','index.php?pagename=stores&state=$matches[1]','top');

function is_tree($pid) { // $pid = The ID of the page we're looking for pages underneath
	global $post; // load details about this page
	if(is_page()&&($post->post_parent==$pid||is_page($pid)))
		return true; // we're at the page or at a sub page
	else
		return false; // we're elsewhere
};


function theme_setup() {
	// Menus
	register_nav_menu( 'main', 'Main Menu' );
	// RSS Feed
	add_theme_support( 'automatic-feed-links' );
	// Thumbnails
	add_theme_support( 'post-thumbnails' );
	add_image_size( '48x48', 48, 48, true );
	add_image_size( '64x64', 64, 64, true );
	add_image_size( '128x128', 128, 128, true );
	add_image_size( '256x256', 256, 256, true );
	add_image_size( '512x512', 512, 512, true );
	add_image_size( '1080x1080', 1080, 1080, true );
	add_image_size( '1600x900', 1600, 900, true );
	add_image_size( '1200x630', 1200, 630, true );
}
add_action( 'after_setup_theme', 'theme_setup' );

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Services', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Services:', 'text_domain' ),
		'all_items'           => __( 'All Services', 'text_domain' ),
		'view_item'           => __( 'View Service', 'text_domain' ),
		'add_new_item'        => __( 'Add New Service', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Service', 'text_domain' ),
		'update_item'         => __( 'Update Service', 'text_domain' ),
		'search_items'        => __( 'Search Service', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Service', 'text_domain' ),
		'description'         => __( 'Services', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-editor-ul',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'rewrite' => array(
			'slug' => 'services',
			'with_front' => true
		)
	);
	register_post_type( 'Services', $args );

	$labels = array(
		'name'                => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Case Study', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Case Studies', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Case Studies:', 'text_domain' ),
		'all_items'           => __( 'All Case Studies', 'text_domain' ),
		'view_item'           => __( 'View Case Study', 'text_domain' ),
		'add_new_item'        => __( 'Add New Case Study', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Case Study', 'text_domain' ),
		'update_item'         => __( 'Update Case Study', 'text_domain' ),
		'search_items'        => __( 'Search Case Study', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Case Study', 'text_domain' ),
		'description'         => __( 'Case Studies', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-text',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'rewrite' => array(
			'slug' => 'case-studies',
			'with_front' => true
		)
	);
	register_post_type( 'Case Study', $args );

	$labels = array(
		'name'                => _x( 'Team', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Team Member', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Team', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Team Members:', 'text_domain' ),
		'all_items'           => __( 'All Team', 'text_domain' ),
		'view_item'           => __( 'View Team', 'text_domain' ),
		'add_new_item'        => __( 'Add New Team Member', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Team Member', 'text_domain' ),
		'update_item'         => __( 'Update Team Member', 'text_domain' ),
		'search_items'        => __( 'Search Team Member', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Team', 'text_domain' ),
		'description'         => __( 'Team Members', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'rewrite' => array(
			'slug' => 'team',
			'with_front' => true
		)
	);
	register_post_type( 'Team', $args );

	$labels = array(
		'name'                => _x( 'Clients', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Clients', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Clients:', 'text_domain' ),
		'all_items'           => __( 'All Clients', 'text_domain' ),
		'view_item'           => __( 'View Client', 'text_domain' ),
		'add_new_item'        => __( 'Add New Client', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Client', 'text_domain' ),
		'update_item'         => __( 'Update Client', 'text_domain' ),
		'search_items'        => __( 'Search Client', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Client', 'text_domain' ),
		'description'         => __( 'Clients', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-star-filled',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'rewrite' => array(
			'slug' => 'clients',
			'with_front' => true
		)
	);
	register_post_type( 'Clients', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );

?>
