<?php /* Template Name: List */
 get_header(); ?>

<div class="main-info" data-barba="container" data-barba-namespace="list">
  <div class="list">
    <div class="list__header">
      <h1 class="list__title">Lista sygnatariuszy</h1>
    </div>
    <div class="container-fluid">
      <div class="list__content-wrap row">
        <div class="list__column col-12 col-xl-4">
          <div class="list__box-wrap d-flex justify-content-center">
            <div class="list__box d-flex flex-column align-items-center align-items-xl-start">
              <div class="list__box-top d-flex flex-xl-row flex-column align-items-center">
                <img src="<?=images()?>paper-light.svg" alt="" class="list__paper">
                <div class="list__count d-flex flex-column justify-content-center align-items-center justify-content-xl-between align-items-xl-start">
                  <p class="list__number">1250</p>
                  <p class="list__label">Osób podpisało Apel</p>
                </div>
              </div>
              <button data-popup="open" class="list__button">Podpisz apel</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-8">
          <div class="list__area d-flex flex-column align-content-center">
            <ol class="list__content">
              <?php for ($i = 0; $i < 100; $i++) : ?>
              <li class="list__item">John Doe</li>
              <?php endfor; ?>
              <div class="list__overlay">
              </div>
            </ol>
            <div class="show__area d-flex flex-row justify-content-center">
              <a href="" class="list__show">Rozwiń listę</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>