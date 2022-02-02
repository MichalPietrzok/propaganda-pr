<?php

function add_subscriber() {
  $project_name = trim($_POST["project_name"]);
  $admin_email  = trim($_POST["admin_email"]);
  $form_subject = trim($_POST["form_subject"]);
  

  
  $message .= 'Nowy sygnatariusz na Stronie: '.$project_name;  
  function adopt($text) {
    return '=?UTF-8?B?'.Base64_encode($text).'?=';
  }
  
  $headers = "MIME-Version: 1.0" . PHP_EOL .
  "Content-Type: text/html; charset=utf-8" . PHP_EOL .
  'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
  'Reply-To: '.$admin_email.'' . PHP_EOL;
  
  mail($admin_email, adopt($form_subject), $message, $headers );
}

add_action('wp_ajax_add_subscriber', 'add_subscriber');
add_action('wp_ajax_nopriv_add_subscriber', 'add_subscriber');