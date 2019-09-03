<?php 

// include css and js files
function basis_files () {
  wp_enqueue_style( 'explainer-main-stylesheet', get_stylesheet_uri(), NULL, microtime() );

  wp_enqueue_script( 'explainer-main-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true );
  
  wp_localize_script( 'explainer-main-js', 'explainerData', array(
    'admin_ajax' => admin_url('admin-ajax.php'),
  ));
}

add_action( 'wp_enqueue_scripts', 'basis_files' );

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

require_once get_theme_file_path('/includes/gutenberg-blocks.php'); // Gutenberg custom blocks with acf