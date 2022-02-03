<?php 
  $users = array();

  foreach(get_field('apel_list', 'options') as $item) {
    if ($item['apel_acept']) {
      $users[] = $item;
    }
  }
  $amount_itteration = count($users);
?>
<section class="homepage-sign">
  <div class="homepage-sign__bar d-flex justify-content-center">
    <button data-popup="open" class="homepage-sign__button">Podpisz apel</button>
  </div>
  <div class="homepage-sign__info">
    <div
      class="container container--small d-flex flex-md-row flex-column align-items-center align-items-md-center justify-content-md-between">
      <div class="homepage-sign__people d-flex flex-column align-items-center flex-sm-row align-items-sm-start">
        <img src="<?php images()?>/dist/img/paper.svg" alt="" class="homepage-sign__img">
        <div
          class="homepage-sign__people-count d-flex flex-column align-items-center align-items-sm-start justify-content-between">
          <p class="homepage-sign__number"><?= $amount_itteration ?></p>
          <p class="homepage-sign__label"><?= $amount_itteration > 4  ? 'Osób' : 'Osoby' ?> podpisało Apel</p>
        </div>
      </div>
      <a href="/?page_id=41" class="homepage-sign__info-button">Zobacz listę sygnatariuszy</a>
    </div>
  </div>
</section>