import { includesAll } from './../core/utils'

class Popup {
  constructor(props) {
    this.openButtons = document.querySelectorAll('[data-popup="open"]')
    this.closeButtons = document.querySelectorAll('[data-popup="close"]')
    this.thanksPopup = document.querySelector('[data-popup="thanks"]')
    this.signButton = document.querySelector('[data-popup="sign"]')
    this.checkbox = document.querySelectorAll('input[type="checkbox"]')
    this.mainWrapper = document.querySelector(props.wrapper)
    this.mainContent = document.querySelector('.page-popup__content')
    this.name = document.querySelector('[data-popup="name"]')
    this.email = document.querySelector('[data-popup="email"]')
    this.animationLine = gsap.timeline()

    this.signButton.disabled = true
    const inputs = [this.name, this.email]
    inputs.forEach(input => {
      input.addEventListener('keyup', () => { this.validation() })
    })

    this.checkbox.forEach(input => {
      input.addEventListener('click', () => { this.validation() })
    })

    this.openButtons.forEach(button => {
      button.addEventListener('click', () => { this.openPopup() })
    })

    this.closeButtons.forEach(button => {
      button.addEventListener('click', () => { this.closePopup() })
    })
  }

  openPopup() {
    this.signButton.disabled = true
    this.animationLine
      .to(this.mainWrapper, {
        display: 'block', opacity: 1
      })
      .to(this.mainContent, {
        y: 0
      }, '-=.4')
  }

  closePopup() {
    this.animationLine
      .to(this.mainWrapper, {
        display: 'none', opacity: 0
      })
      .to(this.mainContent, {
        y: '10%'
      }, '<')
    this.thanksPopup.style.display = 'none';
  }

  validation() {
    const check = Array.from(this.checkbox).every(checkbox => checkbox.checked)
    const name = this.name.value.length >= 3
    const email = this.email.value.length > 8 && includesAll(this.email.value, ['@', '.'])
    const val = { name, email, check }
    const keys = Object.keys(val)
    const errors = keys.filter(key => val[key] === false)

    this.signButton.disabled = errors.length > 0
    keys.forEach(key => {
      if (this[key]) this[key].classList.remove('error')
    })
    errors.forEach(err => {
      if (this[err]) this[err].classList.add('error')
    })
    return val
  }
}

export default Popup
