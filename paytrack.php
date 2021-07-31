<?php
/*
Plugin Name: Paytrack
Plugin URI: https://danielsanchez.amarusv.com/
Description: Registro de pagos.
Version: 1.0.1
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

// https://www.dariobf.com/metabox-wordpress/
// https://www.dariobf.com/wordpress-hooks/

function add_post_type_paytrack(){
	echo '
	<form action="' . $_SERVER['REQUEST_URI'] . '" method="post" >
		<input type="text" name="Nombre">
		<input type="text" name="descripcion">
		<input type="text" name="tipo">
		<input type="text" name="valor">
		<input type="submit" name="submit" value="validar">
	</form>

	<h1>aqui debe de mostrar el formulario de tailwind</h1>

		<div class="w-full max-w-xs">
	<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
		<div class="mb-4">
		<label class="block text-gray-700 text-sm font-bold mb-2" for="username">
			Username
		</label>
		<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
		</div>
		<div class="mb-6">
		<label class="block text-gray-700 text-sm font-bold mb-2" for="password">
			Password
		</label>
		<input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
		<p class="text-red-500 text-xs italic">Please choose a password.</p>
		</div>
		<div class="flex items-center justify-between">
		<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
			Sign In
		</button>
		<a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
			Forgot Password?
		</a>
		</div>
	</form>
	<p class="text-center text-gray-500 text-xs">
		&copy;2020 Acme Corp. All rights reserved.
	</p>
	</div>
	';
}

add_shortcode( 'paytrack_form_frontpage', 'add_post_type_paytrack' );


function add_tailwind(){
	wp_enqueue_style( 'custom-style-tailwind', '/wp-content/plugins/paytrack/css/tailwind.css');
}
add_action( 'wp_enqueue_scripts', 'add_tailwind');

function guardar_custom_post(){
	if(isset($_POST['validar'])){
		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$tipo = $_POST['tipo'];
		$valor = $_POST['valor'];
		$new_post = array(
			"post_title" => $nombre,
			"post_type" => "paytrack",

		);
		wp_insert_post($new_post);
		//https://maugelves.com/wp-posts-el-corazon-de-wordpress/
	}
}