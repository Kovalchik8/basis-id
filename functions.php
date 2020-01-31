<?php 

// include css and js files
function basis_files () {
  wp_enqueue_style( 'basis-main-stylesheet', get_stylesheet_uri(), NULL, microtime() );
  wp_enqueue_script( 'basis-main-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true );
  wp_localize_script( 'basis-main-js', 'basisData', array(
    'admin_ajax' => admin_url('admin-ajax.php'),
  ));
}

add_action( 'wp_enqueue_scripts', 'basis_files' );

function disable_wp_auto_p( $content ) {
  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );
  return $content;
}
add_filter( 'the_content', 'disable_wp_auto_p', 0 );

add_filter('show_admin_bar', '__return_false'); // hide wp admin bar when logged in

// exclude folders for all in one wp migration
add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {
  $exclude_filters[] = 'themes/basis/node_modules';
  return $exclude_filters;
});

// max-width for Gutenberg
function custom_admin_css() {
  echo '<style type="text/css">
  .wp-block { max-width: 700px; }
  </style>';
  }
  add_action('admin_head', 'custom_admin_css');

// menu
register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'Basis' ),
  'footer_company' => __( 'Footer Company Menu', 'Basis' ),
  'footer_solution' => __( 'Footer Solution Menu', 'Basis' ),
  'footer_social' => __( 'Footer Social Menu', 'Basis' ),
  'footer_bottom' => __( 'Footer Bottom Menu', 'Basis' ),
));

// admin css for post type basis_email
function admin_style() {
  if (get_post_type() == 'basis_email')
    wp_enqueue_style('admin-styles', get_theme_file_uri('/includes/admin.css') );
}
add_action('admin_enqueue_scripts', 'admin_style');

// add option page from acf
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// Enable support for Post Thumbnails on posts and pages.
function set_setup() {
  add_theme_support('post-thumbnails');
  add_image_size( 'tabor-featured-image-xsm', 120, 120, true );
  add_image_size( 'tabor-featured-image-sml', 434, 9999, false );
  add_image_size( 'tabor-featured-image-med', 868, 9999, false );
  add_image_size( 'tabor-featured-image-lrg', 1736, 9999, false );
}
add_action('after_setup_theme', 'set_setup');

require_once get_theme_file_path('/includes/gutenberg-blocks.php'); // Gutenberg custom blocks with acf
require_once get_theme_file_path('/includes/class-wp-bootstrap-navwalker.php'); // menu
require_once get_theme_file_path('/includes/mail.php');