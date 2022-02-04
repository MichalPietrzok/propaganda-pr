<?php

function add_subscriber() {
  $project_name = trim($_POST["project_name"]);
  $admin_email  = trim($_POST["admin_email"]);
  $form_subject = trim($_POST["form_subject"]);
  $user_name = trim($_POST["name"]);
  $user_email = trim($_POST["email"]);
  $from_mail = 'michal.pietrzok@follow.vision';
  $secret_key = rand();
  $subscriber = array(
    'apel_name' => $user_name,
    'apel_email' => $user_email,
    'apel_secret' => $secret_key
  );
  
  
  $search_email = array_search($user_email, array_column(get_field('apel_list', 'options'), 'apel_email'));
  if ($search_email === false) {
    add_row('apel_list', $subscriber, 'options');
    $message .= 'Nowy sygnatariusz na Stronie PR to nie propaganda';  
    $user_message .= '<table>
      <tr>
        <td style="font-family: Arial; font-weight: 400; color: #000000;">
          Aby podpisać Apel 
          <a href="'.get_home_url().'/potwierdzenie-adresu?user='.$user_email.'&sk='.$secret_key.'"> potwierdź swój adres mailowy</a>
        </td>
      </tr>
    </table>';
    function adopt($text) {
      return '=?UTF-8?B?'.Base64_encode($text).'?=';
    }
    
    $headers = "MIME-Version: 1.0" . PHP_EOL .
    "Content-Type: text/html; charset=utf-8" . PHP_EOL .
    'From: '.adopt($project_name).' <'.$from_mail.'>' . PHP_EOL .
    'Reply-To: '.$from_mail.'' . PHP_EOL;
    
    mail($admin_email, adopt($form_subject), $message, $headers );
    mail($user_email, adopt($form_subject), $user_message, $headers );
  }
}

add_action('wp_ajax_add_subscriber', 'add_subscriber');
add_action('wp_ajax_nopriv_add_subscriber', 'add_subscriber');