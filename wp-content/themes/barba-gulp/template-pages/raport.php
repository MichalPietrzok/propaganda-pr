<?php /* Template Name: Raport */
 get_header(); ?>

<div class="main-info" data-barba="container" data-barba-namespace="raport">
  <div class="raport">
    <div class="raport__header d-flex justify-content-center">
      <h1 class="raport__title"><?= get_the_title() ?></h1>
    </div>
    <div class="container container--xsamll">
      <div class="row">
        <div class="col-12 raport__intro">
          <?= get_field('intro')?>
        </div>
      </div>
    </div>
    <div class="container container--big">
      <div class="row">
        <?php while(has_sub_field('boxes')) : ?>
        <div class="col-md-6 col-xl-3">
          <div class="raport__box">
            <img src="<?= get_sub_field('boxes_image')['sizes']['raport-box'] ?>" alt="" class="raport__box-img">
            <p class="raport__box-text"><?= get_sub_field('boxes_text') ?></p>
          </div>
        </div>
        <?php endwhile; ?>
        <div class="col-12 d-flex flex-column align-items-center">
          <p class="raport__info"><?= get_field('final') ?></p>
          <a download href="<?= get_field('file') ?>" class="raport__button">Pobierz raport</a>
          <img src="<?=images()?>raport-books.jpg" alt="" class="raport__img">
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>