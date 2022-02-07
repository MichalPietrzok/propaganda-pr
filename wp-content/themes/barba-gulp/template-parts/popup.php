<div class="page-popup">
  <div class="page-popup__content d-flex justify-content-center">
    <div data-popup="close" class="page-popup__bg"></div>
    <div class="page-popup__wrap">
      <div class="page-popup__close-wrap d-flex justify-content-end">
        <img data-popup="close" src="<?=images()?>close.svg" alt="" class="page-popup__close">
      </div>
      <h2 class="page-popup__title">Podpisz Apel</h2>
      <p class="page-popup__information">Podpisując nasz apel sprzeciwiasz się nadużyciom, które negatywnie wpływają na wizerunek branży PR. Bo PR to nie propaganda! </p>
      <a data-popup="close" href="<?= get_home_url()?>/#apel" class="page-popup__link d-block">Zobacz Apel</a>
      <form class="page-popup__form" id="subscribe-form">
        <!-- Hidden Required Fields -->
        <input type="hidden" name="project_name" value="PR to nie propaganda">
        <input type="hidden" name="admin_email" value="info@zfpr.pl">
        <input type="hidden" name="form_subject" value="Nowy Sygnatariusz">
        <!-- END Hidden Required Fields -->
        <input type="text" data-popup="name" placeholder="Imię i nazwisko" name="name" class="page-popup__input">
        <input type="email" data-popup="email" placeholder="E-mail" name="email" class="page-popup__input">
        <p class="page-popup__subtitle">Wymagane zgody</p>
        <div class="page-popup__check-wrap d-flex">
          <input id="privacy" type="checkbox" name="privacy" id="" class="page-popup__check">
          <span class="page-popup__checkmark"></span>
          <label for="privacy" class="page-popup__label">Zapoznałem się i akceptuję Politykę Prywatności ZFPR*</label>
        </div>
        <div class="page-popup__check-wrap d-flex">
          <input id="data" type="checkbox" name="data" id="" class="page-popup__check">
          <span class="page-popup__checkmark"></span>
          <label for="data" class="page-popup__label">Wyrażam zgodę na przetwarzanie podanych przeze mnie w formularzu danych osobowych przez administratora danych osobowych, którym jest Związek Firm Public Relations z siedzibą w Warszawie 00-732, przy ul. Czerskiej 8/10 („ZFPR”) w celu podpisania „Apelu” *</label>
        </div>
        <div class="page-popup__check-wrap d-flex">
          <input id="public" type="checkbox" name="public" id="" class="page-popup__check">
          <span class="page-popup__checkmark"></span>
          <label for="public" class="page-popup__label">Wyrażam zgodę na publikację przez Związek Firm Public Relations mojego imienia i nazwiska na stronie internetowej www.prtoniepropaganda.pl (zgoda jest dobrowolna, ale wymagana do podpisania „Apelu”)* <br> <br> *Zgody obowiązkowe</label>
        </div>
        <div class="page-popup__buton-wrap d-flex justify-content-center">
          <button data-popup="sign" class="page-popup__button">Podpisuję</button>
        </div>
      </form>
    </div>
  </div>
</div>