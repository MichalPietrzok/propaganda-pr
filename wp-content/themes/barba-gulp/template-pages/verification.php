<?php /* Template Name: Verification */
get_header();
?>

<div class="main-info" data-barba="container" data-barba-namespace="verification">
 <section class="verification">
  <div class="align-items-center justify-content-center">
    <div class="container container--medium">
      <div class="row">
        <div class="col-12 d-flex align-items-center" style="height: 100vh">
          <div class="verification__wrap">
            <h2 class="verification__title">Błąd 404</h2>
            <p class="verification__information">Przejdź do <a href="<?= get_home_url()?>">Strony głównej</a></p>
            <p class="verification__information">Albo skontaktuj się z nami <a href="mailto:info@zfpr.pl">info@zfpr.pl</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
 </section>
</div>

<?php get_footer(); ?>