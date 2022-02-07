<?php /* Template Name: Verification */
get_header();
$user_email = $_GET['user'];
$user_secret = $_GET['sk'];

?>

<div class="main-info" data-barba="container" data-barba-namespace="verification">
 <section class="verification">
  <div class="align-items-center justify-content-center">
    <div class="container container--medium">
      <div class="row">
        <div class="col-12 d-flex align-items-center" style="height: 100vh">
            <?php 
              $index_email = array_search($user_email, array_column(get_field('apel_list', 'options'), 'apel_email'));
              if ($user_email && $index_email !== false) {
                $apel_secret = get_field('apel_list', 'options')[$index_email]['apel_secret'];
                if($user_secret == $apel_secret) {
                  $user = get_field('apel_list', 'options')[$index_email];
                  $user['apel_acept'] = true;
                  $row_number = $index_email + 1;
                  update_row('apel_list', $row_number, $user, 'options');  
                ?>
                  <div class="verification__wrap">
                    <h2 class="verification__title">Dziękujemy za podpisanie apelu!</h2>
                    <p class="verification__information">Twoje dane zostały poprawnie zweryfikowane.</p>
                    <p class="verification__information">Prejdź do <a href="<?= get_home_url()?>/lista-sygnatariuszy">Listy Sygnatariuszy</a></p>
                  </div>        
               <?php }
              } else {
                ?>
                  <div class="verification__wrap">
                    <h2 class="verification__title">Coś poszło nie tak...</h2>
                    <p class="verification__information">Prejdź do <a href="<?= get_home_url()?>">Strony głównej</a></p>
                    <p class="verification__information">Albo skontaktuj się z nami <a href="mailto:info@zfpr.pl">info@zfpr.pl</a></p>
                  </div>
                <?php 
              }
            ?>
        </div>
      </div>
    </div>
  </div>
 </section>
</div>

<?php get_footer(); ?>