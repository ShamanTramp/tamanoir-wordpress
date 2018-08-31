<?php
/**
** activation du theme enfant
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}



add_action('wp_enqueue_scripts', 'load_javascript_files');
function load_javascript_files() {
wp_register_script('projets_js', get_stylesheet_directory_uri() . '/js/projets.js', array('jquery'), true );
wp_enqueue_script('projets_js');
}