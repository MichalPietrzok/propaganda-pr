<header id="main-header" class="main-header site-header">
  <div class="header d-flex flex-row align-items-center justify-content-between">
    <img src="<?php images()?>/dist/img/logo.svg" alt="" class="header__logo">
    <div class="header__options">
      <a href="/#about" class="header__option">O projekcie</a>
      <a href="/?page_id=29" class="header__option">Raport</a>
      <a href="?page_id=41" class="header__option">Lista sygnatariuszy</a>
      <a href="/?page_id=38" class="header__option">Kontakt</a>
      <button data-popup="open" href="#" class="header__button">Podpisz apel</button>
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
    <div class="header__mobile">
      <div class="header__mobile-wrap d-flex flex-column align-items-center">
        <button data-popup="open" href="#" class="header__button header__button--mobile">Podpisz apel</button>
        <a href="/#about" class="header__option header__option--mobile">O projekcie</a>
        <a href="/?page_id=29" class="header__option header__option--mobile">Raport</a>
        <a href="?page_id=41" class="header__option header__option--mobile">Lista sygnatariuszy</a>
        <a href="/?page_id=38" class="header__option header__option--mobile">Kontakt</a>
      </div>
    </div>
  </div>
</header>

<?php get_template_part('template-parts/popup') ?>