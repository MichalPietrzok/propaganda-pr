<?php

function add_subscriber() {
  $project_name = trim($_POST["project_name"]);
  $admin_email  = trim($_POST["admin_email"]);
  $form_subject = trim($_POST["form_subject"]);
  $from_mail = 'michal.pietrzok@follow.vision';

  $subscriber = array(
    'apel_name' => trim($_POST["name"]),
    'apel_email' => trim($_POST["email"])
  );

  add_row('apel_list', $subscriber, 'options');

  $message .= 'Nowy sygnatariusz na Stronie PR to nie propaganda';  

  function adopt($text) {
    return '=?UTF-8?B?'.Base64_encode($text).'?=';
  }
  
  $headers = "MIME-Version: 1.0" . PHP_EOL .
  "Content-Type: text/html; charset=utf-8" . PHP_EOL .
  'From: '.adopt($project_name).' <'.$from_mail.'>' . PHP_EOL .
  'Reply-To: '.$from_mail.'' . PHP_EOL;
  
  mail($admin_email, adopt($form_subject), $message, $headers );
}

add_action('wp_ajax_add_subscriber', 'add_subscriber');
add_action('wp_ajax_nopriv_add_subscriber', 'add_subscriber');