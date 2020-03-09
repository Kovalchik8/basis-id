<?php 

// register blocks for Gutenberg with acf pro
function register_acf_block_types() {

  $acf_blocks = array(
    'home' => array('hero', 'about', 'partners', 'help', 'explain', 'advantages', 'features', 'more', 'latest', 'hero-new', 'numbers', 'help-new', 'services', 'process', 'cards'),
    'documents' => array('hero', 'list'),
    'about' => array('hero', 'desc', 'press', 'features', 'social'),
    'about-new' => array('hero', 'cards', 'quote', 'content', 'social'),
    'product' => array('hero', 'pills', 'pills-new', 'hero-new'),
    'compliance' => array('hero', 'pills'),
    'faq' => array('list'),
    'aml' => array('hero', 'pills', 'lists', 'clients'),
    'aml-child' => array('hero', 'numbers', 'about', 'advantages', 'links', 'services', 'approaches')
  );

  foreach($acf_blocks as $key => $block)
    foreach($block as $slug)
      acf_register_block_type(array(
        'name'              => ''. $key . '-'. $slug .'',
        'title'             => __(''. $key . ' '. $slug .' section'),
        'description'       => __(''. $slug .' section for '. $key . ' page'),
        'render_template'   => 'components/blocks/'. $key . '/'. $key . '-'. $slug .'.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( ''. $slug .'', ''. $key . '' ),
      ));
}

if( function_exists('acf_register_block_type') ) {
  add_action('acf/init', 'register_acf_block_types');
}


?>