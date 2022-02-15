<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fv
 */

get_header();
?>
<section class="error" data-barba="container"  data-barba-namespace="error">
  <div class="verification">
    <div class="align-items-center justify-content-center">
      <div class="container container--medium">
        <div class="row">
          <div class="col-12 d-flex align-items-center" style="height: 100vh">
            <div class="verification__wrap">
              <h2 class="verification__title">Błąd 404</h2>
              <p class="verification__information">Przejdź do <a href="<?= get_home_url()?>">Strony głównej</a></p>
              <p class="verification__information">Żeby skontaktować się z nami napisz na <a href="mailto:info@zfpr.pl">info@zfpr.pl</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
