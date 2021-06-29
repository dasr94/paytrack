<?php
/*
Plugin Name: Paytrack
Plugin URI: https://danielsanchez.amarusv.com/
Description: Registro de pagos.
Version: 1.0.0
Author: Daniel Sanchez
Author URI: http://danielsanchez.amarusv.com/
*/

// Register Custom Post Type
function paytrack_custom_post_type() {

	$labels = array(
		'name'                  => 'Post Types',
		'singular_name'         => 'Post Type',
		'menu_name'             => 'Paytrack',
		'name_admin_bar'        => 'Paytrack',
		'archives'              => 'Item Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'Todos los registros',
		'add_new_item'          => 'Add New register',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'buscar registro',
		'not_found'             => 'No hay registros..',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Post Type',
		'description'           => 'Post Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'paytrack', $args );

}
add_action( 'init', 'paytrack_custom_post_type', 0 );