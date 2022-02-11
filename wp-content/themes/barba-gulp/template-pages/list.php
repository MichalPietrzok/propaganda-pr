<?php /* Template Name: List */
 get_header(); 
  $users = array();

  foreach(get_field('apel_list', 'options') as  $key => $item) {
    if ($item['apel_acept']) {
      $users[] = $item;
      $the_name[$key] = $item['apel_name'];
    }
  }

  array_multisort($the_name, SORT_ASC, $users);
  $amount_itteration = count($users);
?>

<div class="main-info" data-barba="container" data-barba-namespace="list">
  <div class="list">
    <div class="list__header">
      <h1 class="list__title"><?= get_the_title() ?></h1>
    </div>
    <div class="container-fluid">
      <div class="list__content-wrap row">
        <div class="list__column col-12 col-xl-4">
          <div class="list__box-wrap d-flex justify-content-center">
            <div class="list__box d-flex flex-column align-items-center align-items-xl-start">
              <div class="list__box-top d-flex flex-xl-row flex-column align-items-center">
                <img src="<?=images()?>paper-light.svg" alt="" class="list__paper">
                <div
                  class="list__count d-flex flex-column justify-content-center align-items-center justify-content-xl-between align-items-xl-start">
                  <p class="list__number"><?= $amount_itteration ?></p>
                  <p class="list__label">Liczba Sygnatariuszy</p>
                </div>
              </div>
              <button data-popup="open" class="list__button">Podpisz Apel</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-8">
          <div class="list__wrap">
            <div data-list="wrapper" class="list__content row">
              <?php
                $block_step = $amount_itteration > 10 ? 
                ceil($amount_itteration / 3) : $amount_itteration + 1;
                for($i = 0; $i < $amount_itteration; $i++) {
                  $user_counter = 0;
                  if($i % $block_step === 0) {
                    $user_counter = $i;
                    echo('<ul class="list__content-list col-12 col-sm-6 col-md-4">');
                    for($j = 0; $j < $user_counter + $block_step; $j++) {
                      if($j > $user_counter - 1 && array_key_exists($j, $users)) {
                        echo '<li class="list__item">'.($j + 1).'. '.$users[$j]['apel_name'].'</li>';
                      }
                    }
                    echo('</ul>');
                  }
                }
              ?>
            </div>
            <div class="list__show-wrap">
              <p data-list="button" class="list__show">Rozwiń listę</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>