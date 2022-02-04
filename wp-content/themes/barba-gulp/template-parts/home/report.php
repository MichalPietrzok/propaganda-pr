<?php  $info = get_field('report'); ?>
<section class="homepage-report">
  <div class="homepage-report__header d-flex flex-row">
    <p class="homepage-report__title"><?= $info['report_title'] ?></p>
    <div class="homepage-report__header-cyan">
    </div>
    <div class="homepage-report__header-blue"></div>
  </div>
  <div class="homepage-report__columns">
    <div class="homepage-report__row d-flex flex-column flex-lg-row ">
      <div class="homepage-report__column homepage-report__column--yellow d-flex flex-column align-items-center">
        <p class="homepage-report__subject">Jakie jest twoje ogólne skojarzenie z branżą PR?</p>
        <img src="<?=images()?>graph1.svg" alt="" class="homepage-report__diagram">
        <p class="homepage-report__caption">Badanie ilościowe CAWI zrealizowane na grupie 850 zamieszkałych w Polsce
          osób w wieku 18–65 lat. Próba reprezentatywna, odzwierciedlająca strukturę populacji pod względem wieku, płci,
          miejsca zamieszkania i wykształcenia.</p>
      </div>
      <div class="homepage-report__column homepage-report__column--cyan">
        <div
          class="homepage-report__percentage-wrap d-flex flex-column flex-xl-row align-items-xl-end align-items-center">
          <img src="<?=images()?>percentage.svg" alt="" class="homepage-report__percentage">
          <p class="homepage-report__percentage-caption">ankietowanych</p>
        </div>
        <div class="homeapge-report__description-wrap d-flex flex-column align-items-center">
          <p class="homepage-report__description">bardzo często lub często spotyka się z nadużywaniem terminu PR jako
            synonimu manipulacji, dezinformacji, propagandy, oszustwa czy kłamstwa</p>
          <p class="homepage-report__caption">Badanie zrealizowane we wrześniu 2021 roku przez Związek Firm Public
            Relations na grupie 187 pracowników agencji członkowskich ZFPR.</p>
          <a download href="http://propaganda-pr.follow.vision/wp-content/uploads/2022/02/pusty-pdf.pdf" class="homepage-report__button">Pobierz raport</a>
        </div>
      </div>
      <div
        class="homepage-report__column homepage-report__column--blue d-flex flex-column align-items-center align-items-lg-start">
        <img src="<?=images()?>puppet.png" alt="" class="homepage-report__puppet">
        <p class="homepage-report__question">Czy kiedykolwiek ktoś z twojego bliskiego otoczenia uznał twój zawód za
          nieetyczny?</p>
        <img src="<?=images()?>info-graph.svg" alt="" class="homepage-report__graph">
        <p class="homepage-report__caption homepage-report__caption--light">Badanie zrealizowane we wrześniu 2021 roku
          przez Związek Firm Public
          Relations na grupie 187 pracowników agencji członkowskich ZFPR.</p>
      </div>
    </div>
  </div>
</section>