<?php /* Template Name: Contact */
 get_header(); ?>

<div class="main-info" data-barba="container" data-barba-namespace="contact">
  <div class="contact">
    <div class="contact__header d-flex justify-content-center">
      <h1 class="contact__title"><?= get_the_title()?> </h1>
    </div>
    <div class="container container--middle">
      <div class="row">
        <div class="contact__desc col-12 d-flex flex-column flex-md-row">
          <?php 
            $adres = get_field('contact_adres');
            $desc = get_field('contact_desc');
          ?>
          <div class="contact__addres">
            <h2 class="contact__label"><?= $adres['contact_adres_title'] ?></h2>
            <div class="contact__info"><?= $adres['contact_adres_info'] ?></div>
          </div>
          <div class="contact__content">
            <h2 class="contact__label"><?= $desc['contact_desc_title'] ?></h2>
            <p class="contact__text"><?= $desc['contact_desc_text'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>