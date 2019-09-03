<?php 

function register_acf_block_types() {

  // register blocks for Gutenberg with acf pro
  $acf_blocks = array(
    'home' => array('hero', 'about', 'partners', 'help', 'explain', 'advantages', 'features', 'more', 'latest')
  );

  foreach($acf_blocks as $key=>$block) {
    foreach($block as $slug) {
      acf_register_block_type(array(
        'name'              => ''. $key . '-'. $slug .'',
        'title'             => __(''. $key . ' '. $slug .' section'),
        'description'       => __(''. $slug .' section for '. $key . ' page'),
        'render_template'   => 'components/blocks/'. $key . '/'. $key . '-'. $slug .'.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( ''. $slug .'', ''. $key . '', 'banner' ),
      ));
    }
  }

}

if( function_exists('acf_register_block_type') ) {
  add_action('acf/init', 'register_acf_block_types');
}


?>