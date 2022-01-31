<?php /* Template Name: List */
 get_header(); ?>

<div class="main-info" data-barba="container" data-barba-namespace="list">
  <div class="list">
    <div class="list__header">
      <h1 class="list__title">Lista sygnatariuszy</h1>
    </div>
    <div class="list__content-wrap">
      <div class="list__box d-flex flex-column align-items-center align-items-sm-start">
        <div class="list__box-top d-flex flex-column align-items-center align-items-start flex-sm-row">
          <img src="<?=images()?>paper-light.svg" alt="" class="list__paper">
          <div class="list__count d-flex flex-column justify-content-between">
            <p class="list__number">1250</p>
            <p class="list__label">Osób podpisało Apel</p>
          </div>
        </div>
        <button class="list__button">Podpisz apel</button>
      </div>
      <div class="list__area container container--xsamll">
        <div class="list__content row">
          <div class="col-6 col-sm-3">
            <?php for ($i = 0; $i < 25; $i++) : ?>
            <p class="list__item">1.John Doe</p>
            <?php endfor; ?>
          </div>
          <div class=" col-6 col-sm-3">
            <?php for ($i = 0; $i < 25; $i++) : ?>
            <p class="list__item">1.John Doe</p>
            <?php endfor; ?>
          </div>
          <div class="col-6 col-sm-3">
            <?php for ($i = 0; $i < 25; $i++) : ?>
            <p class="list__item">1.John Doe</p>
            <?php endfor; ?>
          </div>
          <div class="col-6 col-sm-3">
            <?php for ($i = 0; $i < 25; $i++) : ?>
            <p class="list__item">1.John Doe</p>
            <?php endfor; ?>
          </div>
          <div class="list__overlay col-12">
          </div>
        </div>
        <div class="show__area d-flex flex-row justify-content-center">
            <a href="" class="list__show">Rozwiń listę</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>