<?php

/*
Plugin Name: Tamanoir Style Admin
Plugin URI: www.asso-letamanoir.com
Description: Plugin pour personnaliser l'apparence du panel Admin aux couleurs du Tamanoir
Author: ShamanTramp
Version: 1.0
Author URI: shamantramp.com
*/

function tama_admin_style() {
    wp_enqueue_style('tama_admin', plugins_url('admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'tama_admin_style');
add_action('login_enqueue_scripts', 'tama_admin_style');



function tama_custom_admin_color_palette() {
  wp_admin_css_color(
    'Tamanoir-colors',
    __('Tamanoir'),
    get_stylesheet_directory_uri() . '/css/color/tamanoir/colors.css',
    array('#2A251F', '#1C1915', '#473F35', '#E59D37'),
    array('#aa9d88', '#9ebaa0', '#738e96', '#f2fcff')
  );
}
add_action('admin_init', 'tama_custom_admin_color_palette');


function set_default_admin_color($user_id) {
  $args = array(
    'ID' => $user_id,
    'admin_color' => 'Tamanoir-colors'
  );
  wp_update_user( $args );
}
add_action('user_register', 'set_default_admin_color');

function rename_fresh_color_scheme() {
  global $_wp_admin_css_colors;
  $color_name = $_wp_admin_css_colors['Tamanoir-colors']->name;
 
  if( $color_name == 'Default' ) {
    $_wp_admin_css_colors['Tamanoir-colors']->name = 'Tamanoir';
  }
  return $_wp_admin_css_colors;
}
add_filter('admin_init', 'rename_fresh_color_scheme');

