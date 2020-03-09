<?php 

class Mail {
  public function __construct() {
    
    define('SEND_TO', get_field('form_recipient', 'option') );

    add_action('init', array($this, 'register_email_post_type') );

    add_filter( 'manage_edit-basis_email_columns', array($this, 'custom_email_columns' ), 10 );
    add_action( 'manage_basis_email_posts_custom_column', array($this, 'custom_columns_content' ), 10, 2 );

    add_action('wp_ajax_nopriv_send_mail', array($this, 'send_mail') );
    add_action('wp_ajax_send_mail', array($this, 'send_mail') );

    add_action('wp_ajax_nopriv_send_simple_mail', array($this, 'send_simple_mail') );
    add_action('wp_ajax_send_simple_mail', array($this, 'send_simple_mail') );

    add_action('wp_ajax_nopriv_add_to_list', array($this, 'add_to_list') );
    add_action('wp_ajax_add_to_list', array($this, 'add_to_list') );
  }

  public function add_to_list() {
    $this->add_mailchimp_subscriber($_POST["email"]);
  }

  public function add_mailchimp_subscriber($email, $name = '', $phone = '') {
    
     // API to mailchimp
     $list_id = get_field('form_mailchimp', 'option');
     $authToken = 'a2fde093d23369ff8c960bc7ec66be96e793a3c0b07e7292cc85690947464f34-1580902825';

     // The data to send to the API
     $postData = array(
       "email_address" => $email, 
       "status" => "subscribed", 
       "merge_fields" => array(
         "FNAME"=> $name,
         "PHONE"=> $phone
       )
     );

     // Setup cURL
     $ch = curl_init('https://us19.api.mailchimp.com/3.0/lists/'.$list_id.'/members/');
     curl_setopt_array($ch, array(
       CURLOPT_POST => TRUE,
       CURLOPT_RETURNTRANSFER => TRUE,
       CURLOPT_HTTPHEADER => array(
         'Authorization: apikey '.$authToken,
         'Content-Type: application/json'
       ),
       CURLOPT_POSTFIELDS => json_encode($postData)
     ));
     
     // Send the request
     $response = curl_exec($ch);
  }

  public function send_simple_mail() {

    $headers  = "Content-type: text/html; charset=utf8 \r\n";
    $email = sanitize_text_field($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = $email ? $email : $phone;
    $subject = sanitize_text_field($_POST['subject']);

    if (wp_mail(SEND_TO, $subject, $message, $headers)) {
      echo 'Success';

      if (!empty($email)) $this->add_mailchimp_subscriber($email);

      $this->insert_mail_post($email, '', $message, $subject);

    } else {
      echo 'Error';
    }
    die();
    
  }

  public function send_mail() {

    $subject = 'Message from BASIS ID web site';
    $headers  = "Content-type: text/html; charset=utf8 \r\n";
    $name = $email = $message = '';

    foreach($_POST['fields'] as $input) {
      if ($input['name'] == 'name') $name = sanitize_text_field( $input['value'] );
      if ($input['name'] == 'email') $email = sanitize_text_field( $input['value'] );
      if ($input['name'] == 'phone') $phone = sanitize_text_field( $input['value'] );
      $message .= '<b>' . sanitize_text_field( $input['name'] ) . ':</b> ' . sanitize_text_field( $input['value'] ) . '<br><br>'; 
    }

    if ( wp_mail(SEND_TO, $subject, $message, $headers) ) {
      
      echo 'Success';
      $this->add_mailchimp_subscriber($email, $name, $phone);
      $this->insert_mail_post($email, $name, $message);

    } else {
      echo 'Error'; 
    }

    die();
  }

  public function insert_mail_post($email, $name, $message, $subject = 'Request from basisid.com') {
    wp_insert_post( array(
      'post_type' => 'basis_email',
      'post_status' => 'private',
      'post_title' => $name ? $name : $subject,
      'meta_input' => array(
        'basis_email_email' => $email,
        'basis_email_message' => $message ? $message : $email
      )
    ));
  }
  
  public function register_email_post_type() {
    register_post_type( 'basis_email', array(
      'supports' => array('title'),
      'menu_icon' => 'dashicons-email-alt',
      'public' => false,
      'show_ui' => true,
      'exclude_from_search' => true,
      'show_in_nav_menus' => false,
      'has_archive' => false,  
      'rewrite' => false,
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
    unset( $defaults['wpseo-links'] );
    unset( $defaults['date'] );
    $defaults['basis_email_email'] = '<a>Email</a>';
    $defaults['basis_email_date'] = '<a>Date and time</a>';
    return $defaults;
  }

  public function custom_columns_content( $column_name, $post_id ) {
    if ( 'basis_email_email' == $column_name ) 
      echo get_post_meta( $post_id, 'basis_email_email', true );

    if ( 'basis_email_date' == $column_name ) 
      echo get_the_date('j F Y  H:i', $post_id);
  }
}

new Mail();
    
?>