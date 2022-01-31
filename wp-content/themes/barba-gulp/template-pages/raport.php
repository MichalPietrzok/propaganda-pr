<?php /* Template Name: Raport */
 get_header(); ?>

<div class="main-info" data-barba="container" data-barba-namespace="raport">
  <div class="raport">
    <div class="raport__header d-flex justify-content-center">
      <h1 class="raport__title">Raport</h1>
    </div>
    <div class="container container--xsamll">
      <div class="row">
        <div class="col-12">
          <p class="raport__intro">Związek Firm Public Relations po raz kolejny zabiera głos w bardzo ważnej sprawie,
            jaką jest wizerunek branży PR, na którego straży stoi od początku swojej działalności, czyli już 20 lat.
          </p>
          <p class="raport__text">Wspólnie z Instytutem Monitorowania Mediów, firmą analityczno-badawczą Zymetria, a
            także przedstawicielami agencji członkowskich, ZFPR przygotował raport, w którym pokazuje na czym polega
            istota PR-u, a czym na pewno on nie jest, choć często określenia, takie jak „czarny PR”, „polityczna
            zagrywka PR-owa”, pojawiają się w dyskursie społecznym. W raporcie znaleźć można wiele wypowiedzi
            przedstawicieli branży, którzy na co dzień wykonują ten zawód z pełnym zaangażowaniem i profesjonalizmem. Z
            analizy firmy Zymetria dowiadujemy się natomiast jak społeczeństwo postrzega branżę PR. ZFPR, jako
            organizacja skupiająca profesjonalistów branży, zachęca jej przedstawicieli do aktywnego wyrażenia sprzeciwu
            wobec nadużyć w stosunku do terminu public relations, pojawiających się w przestrzeni publicznej. Bo PR to
            nie propaganda!</p>
        </div>
      </div>
    </div>
    <div class="container container--big">
      <div class="row">
        <div class="col-md-6 col-xl-3">
          <div class="raport__box">
            <img src="<?=images()?>small-raport2.jpg" alt="" class="raport__box-img">
            <p class="raport__box-text">Aż 85% przedstawicieli branży, w anonimowej ankiecie ZFPR, wskazało, że nigdy
              nie wstydziło się przyznać, że zajmuje się PR-em. A 81% poleciłoby pracę w branży PR osobom
              rozpoczynającym karierę zawodową. </p>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="raport__box">
            <img src="<?=images()?>small-raport2.jpg" alt="" class="raport__box-img">
            <p class="raport__box-text">Jednak ponad połowa ankietowanych spotkała się z uznaniem zawodu PR-owca za
              nieetyczny, polegający na niegodnych praktykach komunikacyjnych, takich jak: propaganda, manipulacja,
              oszustwo. Ponadto aż 83% osób, które wypełniły kwestionariusz, musiało tłumaczyć rodzinie czy znajomym na
              czym tak naprawdę polega ich praca.</p>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="raport__box">
            <img src="<?=images()?>small-raport2.jpg" alt="" class="raport__box-img">
            <p class="raport__box-text">Jak wynika z danych Instytutu Monitorowania Mediów, w okresie od września 2020
              roku do sierpnia roku 2021, w prasie drukowanej oraz Internecie (w tym na Facebooku, Instagramie,
              Twitterze i YouTubie) pojawiło się aż 9 089 publikacji, w których fraza „czarny PR” występuje zazwyczaj
              jako synonim dyskredytacji, manipulacji, propagandy czy dezinformacji.</p>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="raport__box">
            <img src="<?=images()?>small-raport2.jpg" alt="" class="raport__box-img">
            <p class="raport__box-text">Jak natomiast pokazuje badanie Zymetrii, aż 84% badanych określiło swoje
              skojarzenia z branżą jako „zdecydowanie pozytywne” lub „raczej pozytywne”. Większość respondentów (61%)
              wskazało również, że ich zdaniem wizerunek społeczny public relations w Polsce jest dobry lub bardzo
              dobry. Aż 77% respondentów zgodziło się ze stwierdzeniem, że działania z obszaru public relations
              odgrywają ważną rolę w procesie komunikacji społecznej.</p>
          </div>
        </div>
        <div class="col-12 d-flex flex-column align-items-center">
          <p class="raport__info">Więcej ciekawych danych, wypowiedzi badaczy, a także dziennikarzy i
            przedstawicieli <br>
            branży PR można znaleźć w załączonym raporcie.</p>
          <button class="raport__button">Pobierz raport</button>
          <img src="<?=images()?>raport-books.jpg" alt="" class="raport__img">
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>