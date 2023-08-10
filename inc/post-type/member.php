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
		// 'taxonomies' => ['job_category'],
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
