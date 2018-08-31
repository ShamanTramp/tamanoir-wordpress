<?php

/*
Plugin Name: Tamanoir Custom Posts
Plugin URI: www.asso-letamanoir.com
Description: Plugin pour ajouter des custom posts
Author: ShamanTramp
Version: 1.0
Author URI: shamantramp.com
*/
//Add the support for your cpt in the Widget Activity of the Admin Dashboard



// Custom Post Type : Fiches Equipe

function tama_fiches_equipe() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Fiches Equipe', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Fiche Equipe', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Fiches Equipe'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les Fiches'),
		'view_item'           => __( 'Voir les Fiches Equipe'),
		'add_new_item'        => __( 'Ajouter une nouvelle Fiche Equipe'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la Fiche Equipe'),
		'update_item'         => __( 'Mettre à jour la Fiche Equipe'),
		'search_items'        => __( 'Rechercher une Fiche Equipe'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Fiches Equipe'),
		'description'         => __( 'Tous sur Fiches Equipe'),
		'labels'              => $labels,
		// Si vous utilisez les Dashicons, mettez la classe CSS de celui que vous souhaitez
		'menu_icon'   => 'http://localhost/tamanoir-wordpress/wp-content/uploads/2018/06/team-mini.png',
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'fiche-equipe'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "fiche-equipe" et ses arguments
	register_post_type( 'fiche-equipe', $args );

}

add_action( 'init', 'tama_fiches_equipe', 0 );

add_action('wp_insert_post', 'wpc_champs_personnalises_defaut');
 function wpc_champs_personnalises_defaut($post_id)
 {
 if ( $_GET['post_type'] = 'fiche-equipe' ) {
 add_post_meta($post_id, 'a-statut', '', true);
 add_post_meta($post_id, 'b-poste1', '', true);
 add_post_meta($post_id, 'b-poste2', '', true);
 add_post_meta($post_id, 'b-poste3', '', true);
 add_post_meta($post_id, 'b-poste4', '', true);
 add_post_meta($post_id, 'b-poste5', '', true);
 add_post_meta($post_id, 'b-poste6', '', true);
 add_post_meta($post_id, 'b-poste7', '', true);
 add_post_meta($post_id, 'b-poste8', '', true);
 add_post_meta($post_id, 'b-poste9', '', true);
 add_post_meta($post_id, 'c-diplome1', '', true);
 add_post_meta($post_id, 'c-diplome2', '', true);
 add_post_meta($post_id, 'c-diplome3', '', true);
 add_post_meta($post_id, 'c-diplome4', '', true);
 add_post_meta($post_id, 'c-diplome5', '', true);
 }
 return true;
 }


// Custom Post Type : Articles Fourmilière

function tama_post_fourmis() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Posts Fourmilière', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Post Fourmilière', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Fourmilière'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les Posts'),
		'view_item'           => __( 'Voir les Posts Fourmilière'),
		'add_new_item'        => __( 'Ajouter un nouveau Post à la Fourmilière'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer le Post Fourmilière'),
		'update_item'         => __( 'Mettre à jour le Post Fourmilière'),
		'search_items'        => __( 'Rechercher un Post dans la Fourmilière'),
		'not_found'           => __( 'Non trouvé'),
		'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Posts Fourmilière'),
		'description'         => __( 'Tous sur Posts Fourmilière'),
		'labels'              => $labels,
		// Si vous utilisez les Dashicons, mettez la classe CSS de celui que vous souhaitez
		'menu_icon'   => 'http://localhost/tamanoir-wordpress/wp-content/uploads/2018/06/ant-mini.png',
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'post-fourmis'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "fiche-equipe" et ses arguments
	register_post_type( 'post-fourmis', $args );

}

add_action( 'init', 'tama_post_fourmis', 0 );


add_action( 'init', 'tama_post_fourmis_taxonomies', 0 );

//On crée 3 taxonomies personnalisées: Année, Réalisateurs et Catégories de série.

function tama_post_fourmis_taxonomies() {
	
	
	// Catégorie de post

	$labels_cat_post_fourmis = array(
		'name'                       => _x( 'Catégories', 'taxonomy general name'),
		'singular_name'              => _x( 'Catégorie', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher une catégorie'),
		'popular_items'              => __( 'Catégories populaires'),
		'all_items'                  => __( 'Toutes les catégories'),
		'edit_item'                  => __( 'Editer une catégorie'),
		'update_item'                => __( 'Mettre à jour une catégorie'),
		'add_new_item'               => __( 'Ajouter une nouvelle catégorie'),
		'new_item_name'              => __( 'Nom de la nouvelle catégorie'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer une catégorie'),
		'choose_from_most_used'      => __( 'Choisir parmi les catégories les plus utilisées'),
		'not_found'                  => __( 'Pas de catégories trouvées'),
		'menu_name'                  => __( 'Catégories'),
	);

	$args_cat_post_fourmis = array(
	// Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard
		'hierarchical'          => true,
		'labels'                => $labels_cat_post_fourmis,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'cat-post-fourmis' ),
	);

	register_taxonomy( 'categories-post-fourmis', 'post-fourmis', $args_cat_post_fourmis );


}

// Custom Post Type : Articles FourmilièreProjets

function tama_projets() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Projets', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Projet', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Projets'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les Projets'),
		'view_item'           => __( 'Voir les Projets'),
		'add_new_item'        => __( 'Ajouter un nouveau Projet'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer le Projet'),
		'update_item'         => __( 'Mettre à jour le Projet'),
		'search_items'        => __( 'Rechercher un Projet'),
		'not_found'           => __( 'Non trouvé'),
		'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Projets'),
		'description'         => __( 'Tous sur Projets'),
		'labels'              => $labels,
		// Si vous utilisez les Dashicons, mettez la classe CSS de celui que vous souhaitez
		'menu_icon'   => 'http://localhost/tamanoir-wordpress/wp-content/uploads/2018/06/projects-mini.png',
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'projets-tama'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "fiche-equipe" et ses arguments
	register_post_type( 'projets-tama', $args );

}

add_action( 'init', 'tama_projets', 0 );


add_action( 'init', 'tama_projets_taxonomies', 0 );

//On crée 3 taxonomies personnalisées: Année, Réalisateurs et Catégories de série.

function tama_projets_taxonomies() {
	
	
	// Catégorie de post

	$labels_tama_projets = array(
		'name'                       => _x( 'Catégories', 'taxonomy general name'),
		'singular_name'              => _x( 'Catégorie', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher une catégorie'),
		'popular_items'              => __( 'Catégories populaires'),
		'all_items'                  => __( 'Toutes les catégories'),
		'edit_item'                  => __( 'Editer une catégorie'),
		'update_item'                => __( 'Mettre à jour une catégorie'),
		'add_new_item'               => __( 'Ajouter une nouvelle catégorie'),
		'new_item_name'              => __( 'Nom de la nouvelle catégorie'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer une catégorie'),
		'choose_from_most_used'      => __( 'Choisir parmi les catégories les plus utilisées'),
		'not_found'                  => __( 'Pas de catégories trouvées'),
		'menu_name'                  => __( 'Catégories'),
	);

	$args_tama_projets = array(
	// Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard
		'hierarchical'          => true,
		'labels'                => $labels_tama_projets,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'cat-tama-projets' ),
	);

	register_taxonomy( 'categories-tama-projets', 'projets-tama', $args_tama_projets );

	
}