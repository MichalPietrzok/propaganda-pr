<div class="page-popup">
  <div data-popup="close" class="page-popup__bg"></div>
  <div class="container container--medium">
    <div class="row">
      <div class="col-12">
        <div class="page-popup__wrap">
          <div class="page-popup__close-wrap d-flex justify-content-end">
            <img data-popup="close" src="<?=images()?>close.svg" alt="" class="page-popup__close">
          </div>
          <h2 class="page-popup__title">Podpisz apel</h2>
<<<<<<< HEAD
          <p class="page-popup__information">Podpisując nasz apel sprzeciwiasz się nadużyciom, które negatywnie wpływają na wizerunek branży PR. Bo PR to nie propaganda! </p>
          <form class="page-popup__form" id="subscribe-form">
            <!-- Hidden Required Fields -->
            <input type="hidden" name="project_name" value="PR to nie propaganda">
            <input type="hidden" name="admin_email" value="yury.andreichuk@follow.vision">
            <input type="hidden" name="form_subject" value="Nowy signatariusz">
            <!-- END Hidden Required Fields -->
            <input type="text" placeholder="Imię i nazwisko" name="name" class="page-popup__input">
            <input type="email" placeholder="E-mail" name="email" class="page-popup__input">
=======
          <p class="page-popup__information">Podpisując nasz apel sprzeciwiasz się nadużyciom, które negatywnie wpływają
            na wizerunek branży PR. Bo PR to nie propaganda! </p>
          <form id="form" class="page-popup__form">
            <input data-popup="name" type="text" placeholder="Imię i nazwisko" class="page-popup__input">
            <input data-popup="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
              placeholder="E-mail" class="page-popup__input">
>>>>>>> bbc753dbe01ab70a5ed15b43c915410136b7b7f6
            <p class="page-popup__subtitle">Wymagane zgody</p>
            <div class="page-popup__check-wrap d-flex">
              <input data-popup="check" type="checkbox" name="check" id="" class="page-popup__check">
              <span class="page-popup__checkmark"></span>
              <label for="privacy" class="page-popup__label">Zapoznałem się i akceptuję Politykę Prywatności ZFPR*</label>
            </div>
            <div class="page-popup__check-wrap d-flex">
              <input data-popup="check" type="checkbox" name="check" id="" class="page-popup__check">
              <span class="page-popup__checkmark"></span>
<<<<<<< HEAD
              <label for="data" class="page-popup__label">Wyrażam zgodę na przetwarzanie podanych przeze mnie w formularzu danych osobowych przez administratora danych osobowych, którym jest Związek Firm Public Relations z siedzibą w Warszawie 00-732, przy ul. Czerskiej 8/10 („ZFPR”) w celu podpisania „Apelu” *</label>
=======
              <label for="data" class="page-popup__label">Wyrażam zgodę na przetwarzanie podanych przeze mnie w
                formularzu danych osobowych przez administratora danych osobowych, którym jest Związek Firm Public
                Relations z siedzibą w Warszawie 00-732, przy ul. Czerskiej 8/10 („ZFPR”) w celu podpisania „Apelu” *</label>
>>>>>>> bbc753dbe01ab70a5ed15b43c915410136b7b7f6
            </div>
            <div class="page-popup__check-wrap d-flex">
              <input data-popup="check" type="checkbox" name="check" id="" class="page-popup__check">
              <span class="page-popup__checkmark"></span>
<<<<<<< HEAD
              <label for="public" class="page-popup__label">Wyrażam zgodę na publikację przez Związek Firm Public Relations mojego imienia i nazwiska na stronie internetowej www.prtoniepropaganda.pl (zgoda jest dobrowolna, ale wymagana do podpisania „Apelu”)* <br> <br> *Zgody obowiązkowe</label>
=======
              <label for="public" class="page-popup__label">Wyrażam zgodę na publikację przez Związek Firm Public
                Relations mojego imienia i nazwiska na stronie internetowej www.prtoniepropaganda.pl (zgoda jest dobrowolna, ale
                wymagana do podpisania „Apelu”)* <br> <br>
                *Zgody obowiązkowe</label>
>>>>>>> bbc753dbe01ab70a5ed15b43c915410136b7b7f6
            </div>
            <div class="page-popup__buton-wrap d-flex justify-content-center">
              <button data-popup="sign" class="page-popup__button">Podpisuję</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>