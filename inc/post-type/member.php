<?php
function registerTeamMember()
{

	$labels = [
		'name' => 'Membres',
		'singular_name' => 'Membre',
		'add_new' => 'Ajouter un membre',
		'add_new_item' => 'Ajouter un membre',
		'edit_item' => 'Editer un membre',
		'new_item' => 'Nouveau membre',
		'all_items' => 'Tous les membres',
		'view_item' => 'Voir le membre',
		'search_items' => 'Chercher un membre',
		'not_found' => 'Aucun membre trouvé',
		'not_found_in_trash' => 'Aucun membre trouvé dans la corbeille',
		'parent_item_colon' => '',
		'menu_name' => 'Membres',

	];


	$args = [
		'labels' => $labels,
		'hierarchical' => false,
		'description' => 'Les membres',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'taxonomies' => ['member_type'],
		'capability_type' => 'post',
		'has_archive' => 'membres',
		'menu_position' => null,
		'supports' => [
			'title',
			'editor',
			'thumbnail'
		],
		'menu_icon' => 'dashicons-admin-users',
	];

	register_post_type('team_member', $args);
}

/*
* Plugin Name: Course Taxonomy
* Description: A short example showing how to add a taxonomy called Course.
* Version: 1.0
* Author: developer.wordpress.org
* Author URI: https://codex.wordpress.org/User:Aternus
*/

function registerTeamMemberTypeTaxonomy() {
	$labels = array(
		'name'              => __( 'Type' ),
		'singular_name'     => __( 'Type' ),
		'menu_name'         => __( 'Type' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'public' => false,
	);
	register_taxonomy( 'member_type', [ 'team_member' ], $args );
}


