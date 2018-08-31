<?php

/*
Plugin Name: Tamanoir Panel Admin
Plugin URI: www.asso-letamanoir.com
Description: Plugin pour ajouter les custom posts et des messages au Tableau de Bord
Author: ShamanTramp
Version: 1.0
Author URI: shamantramp.com
*/
//Add the support for your cpt in the Widget Activity of the Admin Dashboard
if ( is_admin() ) {
	add_filter( 'dashboard_recent_posts_query_args', 'add_page_to_dashboard_activity' );
	function add_page_to_dashboard_activity( $query ) {
		// Return all post types
		$post_types = get_post_types();
		// Return post types of your choice
		// $post_types = ['post', 'foo', 'bar'];
		if ( is_array( $query['post_type'] ) ) {
			$query['post_type'] = $post_types;
		} else {
			$temp = $post_types;
			$query['post_type'] = $temp;
		}
		return $query;
	}
}



// Afficher le nombre de types de contenus dans l'encart "D'un coup d'oeil" du tableau de bord de WordPress

add_action('dashboard_glance_items', 'wpm_custom_posttype_glance_items');

// On va récupérer le nombre de chaque Custom Post Type
function wpm_custom_posttype_glance_items()
{
	$glances = array();

	$args = array(
		'public'   => true,  // On ne montre que les CPT publics
		'_builtin' => false  // On n'affiche pas les posts types de base de WordPress (page, post, ...)
	);
	// On récupère chaque CPT
	$post_types = get_post_types($args, 'object', 'and');
	foreach ($post_types as $post_type)
	{
		// On compte le nombre de posts par CPT
		$num_posts = wp_count_posts($post_type->name);
		// On formatte le nombre suivant la locale de WordPress (pour afficher une virgule pour les milliers par exemple)
		$num   = number_format_i18n($num_posts->publish);
		// On formatte le texte pour utiliser soit le singulier soit le pluriel suivant le nombre de posts
		$text  = _n($post_type->labels->singular_name, $post_type->labels->name, intval($num_posts->publish));
		// Si l'utilisateur actuel a le droit d'éditer les types de contenus, on créé des liens
		if (current_user_can('edit_posts'))
		{
			// On affiche un lien pour éditer si l'utilisateur a les droits
			$glance = '<a class="'.$post_type->name.'-count" href="'.admin_url('edit.php?post_type='.$post_type->name).'">'.$num.' '.$text.'</a>';
		}
		else
		{
			// Sinon on affiche simplement le nombre sans liens.
			$glance = '<span class="'.$post_type->name.'-count">'.$num.' '.$text.'</span>';
		}
		// On sauvegarde tout ça dans un tableau
		$glances[] = $glance;
	}
	// On récupère le tableau
	return $glances;
}





add_action('wp_dashboard_setup', 'add_dashboard_widgets');
function add_dashboard_widgets(){
	add_meta_box('dashboard_widget', 'Message aux Tamanoiriens', 'tama_dashboard_widget', 'dashboard', 'normal', 'high');
	// wp_add_dashboard_widget fait la même chose, mais ne propose pas d'option de placement
}

function tama_dashboard_widget(){
	include("msg/message-tamanoiriens.php");
}
