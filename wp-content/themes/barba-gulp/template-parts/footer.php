<footer id="colophon" class="footer site-footer">
  <div class="footer__top">
    <div class="container">
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
        <div class="col-12 col-sm-6 col-lg-3">
          <h2 class="footer__title">Do pobrania</h2>
          <ul class="footer__list">
            <li><a target="_blank" download
                href="http://propaganda-pr.follow.vision/wp-content/uploads/2022/02/pusty-pdf.pdf"
                class="footer__item">Raport</a></li>
            <li><a target="_blank" download
                href="http://propaganda-pr.follow.vision/wp-content/uploads/2022/02/pusty-pdf.pdf">Treść apelu</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-start justify-content-lg-end">
          <div class="footer__links d-flex flex-row align-items-center">
            <a href="https://www.facebook.com/ZwiazekFirmPR"
              class="footer__link d-flex align-items-center justify-content-center"><img class="footer__link-img"
                src="<?=images()?>facebook.svg" alt=""></a>
            <a href="https://twitter.com/zfprpl"
              class="footer__link d-flex align-items-center justify-content-center"><img class="footer__link-img"
                src="<?=images()?>twitter.svg" alt=""></a>
            <a href="https://pl.linkedin.com/company/zwiazek-firm-public-relations"
              class="footer__link d-flex align-items-center justify-content-center"><img class="footer__link-img"
                src="<?=images()?>linkedin.svg" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex flex-column align-items-center justify-content-center flex-md-row justify-content-md-between">
          <p class="footer__copy-rights"> &copy; ZFPR 2022. All Right reserved. <a class="footer__copy-rights"
              href="<?= get_home_url() ?>/polityka-prywatnosci">Polityka prywatności</a></p>
          <p class="footer__copy-rights">Realizacja: FollowVison</p>
        </div>
      </div>
    </div>
  </div>
</footer>