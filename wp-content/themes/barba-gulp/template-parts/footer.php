<footer id="colophon" class="footer site-footer">
  <div class="container container--big">
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-3">
        <h2 class="footer__title">Dane kontaktowe</h2>
        <img src="<?=images()?>zfpr.svg" alt="" class="footer__logo">
        <?php $adres = get_field('contact_adres', 38); ?>
        <div class="footer__address"><?= $adres['contact_adres_info'] ?></div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="footer__menu">
          <h2 class="footer__title">menu</h2>
          <?php
            wp_nav_menu(array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
              'container'  	 => 'ul',
              'menu_class'      => 'footer__list'
            ));
          ?>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-2">
        <h2 class="footer__title">Do pobrania</h2>
        <ul class="footer__list">
          <li><a href="#" class="footer__item">Raport</a></li>
          <li><a href="#" class="footer__item">Słownik pojęć</a></li>
          <li><a href="#" class="footer__item">Treść apelu</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-lg-end">
        <p class="footer__copy-rights"> &copy; ZFPR 2022. All Right reserved. </br> Polityka prywatności
        </p>
      </div>
    </div>
  </div>
</footer>