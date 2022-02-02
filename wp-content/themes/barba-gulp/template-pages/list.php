<?php /* Template Name: List */
 get_header(); 
 
  $users = get_field('apel_list', 'options');
  $amount_itteration = count($users);
?>

<div class="main-info" data-barba="container" data-barba-namespace="list">
  <div class="list">
    <div class="list__header">
      <h1 class="list__title"><?= get_the_title() ?></h1>
    </div>
    <div class="list__content-wrap">
      <div class="list__box d-flex flex-column align-items-center align-items-sm-start">
        <div class="list__box-top d-flex flex-column align-items-center align-items-start flex-sm-row">
          <img src="<?=images()?>paper-light.svg" alt="" class="list__paper">
          <div class="list__count d-flex flex-column justify-content-between">
            <p class="list__number"><?= $amount_itteration ?></p>
            <p class="list__label"><?= $amount_itteration > 4  ? 'Osób' : 'Osoby' ?>  podpisało Apel</p>
          </div>
        </div>
        <button class="list__button">Podpisz apel</button>
      </div>
      <div class="list__area container container--xsamll">
        <div class="list__content row">
          <?php
            $block_step = $amount_itteration > 10 ? 
              ceil($amount_itteration / 4) : $amount_itteration + 1;
            for($i = 0; $i < $amount_itteration; $i++) {
              $user_counter = 0;
              if($i % $block_step === 0) {
                $user_counter = $i;
                echo('<div class="col-12 col-sm-6 col-xl-3">');
                for($j = 0; $j < $user_counter + $block_step; $j++) {
                  if($j > $user_counter - 1 && array_key_exists($j, $users)) {
                    if($users[$j]['apel_acept']) {
                      echo '<p class="list__item">'.($j+1).'.'.$users[$j]['apel_name'].'</p>';
                    }
                  }
                }
                echo('</div>');
              }
            }
          ?>
        </div>
        <div class="show__area d-flex flex-row justify-content-center">
          <a href="" class="list__show">Rozwiń listę</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>