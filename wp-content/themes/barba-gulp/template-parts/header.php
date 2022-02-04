<header id="main-header" class="main-header site-header">
  <div class="header d-flex flex-row align-items-center justify-content-between">
    <a href="/" class="header__logo-wrap">
      <img src="<?php images()?>/dist/img/logo.svg" alt="" class="header__logo">
    </a>
    <div class="header__options-wrap d-lg-flex align-items-center">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
          'container'  	 => 'ul',
          'menu_class'      => 'header__options d-none d-xl-flex justify-content-between'
        ));
      ?>
      <button data-popup="open" href="#" class="header__button d-none d-xl-inline-block">Podpisz apel</button>
    </div>
    <button class="burger d-flex d-xl-none align-items-center justify-content-center" id="nav-button">
      <svg class="burger__svg" xmlns="http://www.w3.org/2000/svg" width="16" height="14.502" viewBox="0 0 16 14.502">
        <g transform="translate(0 0.5)">
          <path d="M16 0L0 0" class="burger__path burger__path--first" />
          <path d="M11 0L0 0" class="burger__path burger__path--second" />
          <path d="M16 0L0 0" class="burger__path burger__path--third" />
        </g>
      </svg>
    </button>
    <div class="header__mobile" style="display: none">
      <div class="header__mobile-wrap d-flex flex-column align-items-center">
        <button data-popup="open" href="#" class="header__button header__button--mobile">Podpisz apel</button>
        <?php
          wp_nav_menu(array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
            'container'  	 => 'ul',
            'menu_class'      => 'header__mobile-options'
          ));
        ?>
      </div>
    </div>
  </div>
</header>

<?php get_template_part('template-parts/popup') ?>

<?php get_template_part('template-parts/thanks') ?>