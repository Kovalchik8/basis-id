<?php 

class Mail {
  public function __construct() {
    
    define('SEND_TO', 'koval4ik8@email.ua');

    add_action('wp_ajax_nopriv_send_mail', array($this, 'send_mail') );
    add_action('wp_ajax_send_mail', array($this, 'send_mail') );
  }

  public function send_mail() {

    $subject = 'Message from basis id web site';

    $message = '<b>Name:</b> ' . $_POST['name'] . '<br><br>'; 
    $message .= '<b>Email:</b> ' . $_POST['email'] . '<br><br>';
    $message .= '<b>Phone:</b> ' . $_POST['phone']. '<br><br>';
    $message .= '<b>Company:</b> ' . $_POST['company']. '<br><br>';
    $message .= '<b>Industry:</b> ' . $_POST['industry']. '<br><br>';
    $message .= '<b>Message:</b> ' . $_POST['message']. '<br><br>';

    $headers  = "Content-type: text/html; charset=utf8 \r\n";

    echo ( mail(SEND_TO, $subject, $message, $headers) ) ? 'Success' : 'Error'; 
    
    die();
  } 
}

new Mail();
    
?>