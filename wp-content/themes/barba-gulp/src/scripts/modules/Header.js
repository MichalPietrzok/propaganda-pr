class Header {
  constructor() {
    this.mainWrap = document.querySelector('.header')
    this.burger = document.querySelector('.burger');
    this.mobileMenu = document.querySelector('.header__mobile');

    this.burger.addEventListener('click', () => {
      this.mobileMenu.style.display === 'none' ? this.openMenu() : this.closeMenu();
    })

    this.mobileMenu.addEventListener('click', () => {
      if (screen.width < 1200) {
        this.closeMenu()
      }
    })
  }

  openMenu() {
    this.mobileMenu.style.display = 'block';
    this.burger.classList.add('burger--open');
  }

  closeMenu() {
    this.mobileMenu.style.display = 'none';
    this.burger.classList.remove('burger--open');
  }
}

const mainHeader = new Header();

export default mainHeader
