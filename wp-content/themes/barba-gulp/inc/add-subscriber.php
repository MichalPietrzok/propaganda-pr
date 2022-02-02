<?php 

function add_subscriber() {
  $project_name = trim($_POST["project_name"]);
  $admin_email  = trim($_POST["admin_email"]);
  $form_subject = trim($_POST["form_subject"]);
  $user_name = trim($_POST["name"]);
  $user_mail = trim($_POST["email"]);

  $subscriber =  array(
      'apel_name' => $user_name,
      'apel_email' => $user_mail
  );

  add_row('apel', $subscriber, 'options');

  $message = "<p>Nowy sygnatariusz na stronie - <b>'.$project_name.'</b></p>";
  
  function adopt($text) {
    return '=?UTF-8?B?'.Base64_encode($text).'?=';
  }
  
  $headers = "MIME-Version: 1.0" . PHP_EOL .
  "Content-Type: text/html; charset=utf-8" . PHP_EOL .
  'From: '.adopt($project_name).' <yury.andreichuk@follow.vision>' . PHP_EOL .
  'Reply-To: yury.andreichuk@follow.vision' . PHP_EOL;
  
  mail($admin_email, adopt($form_subject), $message, $headers );
}

add_action('wp_ajax_add_subscriber', 'add_subscriber');
add_action('wp_ajax_nopriv_add_subscriber', 'add_subscriber');