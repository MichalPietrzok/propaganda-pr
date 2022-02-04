<?php $info = get_field('project'); ?>

<section class="homepage-about" id="o-projekcie">
  <div class="container container--small">
    <h2 class="homepage-about__title"><?= $info['project_title'] ?></h2>
    <div class="row">
      <div class="col-12">
        <div class="homepage-about__wrap d-flex flex-column flex-md-row justify-content-between align-items-center align-items-md-start">
          <div class="homepage-about__info">
            <p class="homepage-about__text"><?= $info['project_text'] ?></p>
          </div>
          <div class="homepage-about__person d-flex flex-column align-items-md-end align-items-center">
            <img src="<?= $info['project_photo'] ?>" alt="" class="homepage-about__img">
            <div class="homepage-about__personal">
              <p class="homepage-about__name"><?= $info['project_name'] ?></p>
              <p class="homepage-about__position"><?= $info['project_position'] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img src="<?= images()?>people.png" alt="" class="homepage-about__decoration">
</section>