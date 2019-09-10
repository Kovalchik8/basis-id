<?php 

class Mail {
  public function __construct() {
    
    define('SEND_TO', get_field('form_recipient', 'option') );

    add_action('init', array($this, 'register_email_post_type') );

    add_filter( 'manage_edit-basis_email_columns', array($this, 'custom_email_columns' ), 10 );
    add_action( 'manage_basis_email_posts_custom_column', array($this, 'custom_columns_content' ), 10, 2 );

    add_action('wp_ajax_nopriv_send_mail', array($this, 'send_mail') );
    add_action('wp_ajax_send_mail', array($this, 'send_mail') );
  }

  public function send_mail() {

    $subject = 'Message from basis id web site';
    $headers  = "Content-type: text/html; charset=utf8 \r\n";
    $name = $email = '';

    foreach($_POST['fields'] as $input) {
      if ($input['name'] == 'name') $name = $input['value'];
      if ($input['name'] == 'email') $email = $input['value'];
      $message .= '<b>' . $input['name'] . ':</b> ' . $input['value'] . '<br><br>'; 
    }

    if ( mail(SEND_TO, $subject, $message, $headers) ) {
      
      echo 'Success';

      wp_insert_post( array(
        'post_type' => 'basis_email',
        'post_status' => 'private',
        'post_title' => $name,
        'meta_input' => array(
          'basis_email_email' => $email,
          'basis_email_message' => $message
        )
      ));


    } else { echo 'Error'; }

    die();
  }
  
  public function register_email_post_type() {

    register_post_type( 'basis_email', array(
      'supports' => array('title'),
      'menu_icon' => 'dashicons-email-alt',
      'public' => true,
      'labels' => array(
        'name' => 'Email',
        'add_new_item' => 'Add new',
        'edit_item' => 'Edit',
        'all_items' => 'All',
        'singular_name' => 'Email',
      ),
    ));
    
  }

  public function custom_email_columns( $defaults ) {
    unset( $defaults['date'] );
    $defaults['basis_email_email'] = '<a>Email</a>';
    $defaults['basis_email_date'] = '<a>Date and time</a>';
    return $defaults;
  }

  public function custom_columns_content( $column_name, $post_id ) {
 
    if ( 'basis_email_email' == $column_name ) {
        echo get_post_meta( $post_id, 'basis_email_email', true );
    }
    if ( 'basis_email_date' == $column_name ) {
        echo get_the_date('j F Y  H:i', $post_id);
    }

  }
}

new Mail();
    
?>