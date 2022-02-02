<?php  $info = get_field('apel'); ?>

<section class="homepage-apel">
  <div class="container container--small">
    <h2 class="homepage-apel__title"><?= $info['apel_title'] ?></h2>
    <div class="row">
      <div class="col-12">
        <p class="homepage-apel__text"><?= $info['apel_content'] ?></p>
      </div>
    </div>
  </div>
</section>