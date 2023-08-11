<?php

//Post Type
require_once 'inc/post-type/member.php';

//ACF fields
require_once 'inc/acf-field-group/member-group.php';
/**
 * Proper way to enqueue scripts and styles
 */
function myThemeScriptEnqueue() {
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/assets/css/main.css' );
//	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'myThemeScriptEnqueue' );

//Ajout du post-type membre
add_action('init', 'registerTeamMember');
add_action( 'init', 'registerTeamMemberTypeTaxonomy' );


add_shortcode( 'member_card', 'displayOneMemberShortcode' );
function displayOneMemberShortcode($attr) {
	$query = new WP_Query([
		'post_type' => 'team_member',
		'posts_per_page' => 1,
		'p' => intval($attr['id']),
	]);

	if($query->have_posts()) {
		ob_start();
		$query->the_post();
		get_template_part( 'partials/card/card', 'member' );

		return ob_get_clean();
	}
}


add_shortcode( 'top_users', 'topUsersShortcode' );

function topUsersShortcode($attr = ['number' => 3])
{
	return wp_list_authors([
		'orderby' => 'post_count',
		'order' => 'DESC',
		'hide_empty' => false,
		'optioncount' => true,
		'echo' => false,
		'number' => $attr['number'],
	]);
}







