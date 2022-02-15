<div data-popup="thanks" class="page-popup align-items-center justify-content-center">
  <div data-popup="close" class="page-popup__bg"></div>
  <div class="container container--medium">
    <div class="row">
      <div class="col-12 d-flex align-items-center" style="height: 100vh">
        <div class="page-popup__wrap page-popup__wrap--thanks">
          <div class="page-popup__close-wrap d-flex justify-content-end">
            <img data-popup="close" src="<?=images()?>close.svg" alt="" class="page-popup__close">
          </div>
          <h2 class="page-popup__title">Dziękujemy za podpisanie apelu!</h2>
          <p class="page-popup__information" data-barba-prevent="all">Twój podpis został dodany. <br> Przejdź do <a href="<?= get_home_url() ?>/lista-sygnatariuszy/">Listy Sygnatariuszy.</a></p>
          <p class="page-popup__information">Żeby skontaktować się z nami napisz na <a href="mailto:info@zfpr.pl">info@zfpr.pl</a></p>
        </div>
      </div>
    </div>
  </div>
</div>