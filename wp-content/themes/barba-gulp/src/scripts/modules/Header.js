class Header {
  constructor() {
    this.mainWrap = document.querySelector('.header')
    this.burger = document.querySelector('.burger');
    this.mobileMenu = document.querySelector('.header__mobile');
    this.options = document.querySelectorAll('.header__option');

    this.burger.addEventListener('click', () => {
      if (this.mobileMenu.style.display === 'none') {
        this.mobileMenu.style.display = 'block'
        this.burger.classList.add('burger--open')
      } else {
        this.mobileMenu.style.display = 'none'
        this.burger.classList.remove('burger--open')
      }
    })

    this.options.forEach((option) => {
      option.addEventListener('click', () => {
        this.mobileMenu.style.display = 'none';
        this.burger.classList.remove('burger--open');
      })
    })
  }
}

const mainHeader = new Header();

export default mainHeader
