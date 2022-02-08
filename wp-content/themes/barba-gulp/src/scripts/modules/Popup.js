import { includesAll } from './../core/utils'

class Popup {
  constructor(props) {
    this.closeButtons = document.querySelectorAll('[data-popup="close"]')
    this.thanksPopup = document.querySelector('[data-popup="thanks"]')
    this.signButton = document.querySelector('[data-popup="sign"]')
    this.checkbox = document.querySelectorAll('input[type="checkbox"]')
    this.mainWrapper = document.querySelector(props.wrapper)
    this.mainContent = document.querySelector('.page-popup__content')
    this.name = document.querySelector('[data-popup="name"]')
    this.email = document.querySelector('[data-popup="email"]')
    this.animationLine = gsap.timeline()
    this.users = []

    this.signButton.disabled = true
    const inputs = [this.name, this.email]
    inputs.forEach(input => {
      input.addEventListener('keyup', () => { this.validation() })
    })

    this.checkbox.forEach(input => {
      input.addEventListener('click', () => { this.validation() })
    })

    this.closeButtons.forEach(button => {
      button.addEventListener('click', () => { this.closePopup() })
    })
    this.getusers()
  }

  searchOpenButtons() {
    const openButtons = document.querySelectorAll('[data-popup="open"]')
    openButtons.forEach(button => {
      button.addEventListener('click', () => { this.openPopup() })
    })
  }

  getusers() {
    const $wrap = document.querySelector('[data-popup="users"]')
    if ($wrap) {
      const $users = $wrap.querySelectorAll('p')
      $users.forEach($user => {
        this.users.push($user.innerText)
      })
      $wrap.parentNode.removeChild($wrap)
    }
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
    let email = this.email.value.length > 8 && includesAll(this.email.value, ['@', '.'])
    const $err = this.mainWrapper.querySelector('[data-popup="email-error"]')
    if (this.users.includes(this.email.value)) {
      email = false
      $err.style.display = 'block'
    } else {
      $err.style.display = 'none'
    }
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

const popup = new Popup({
  wrapper: '.page-popup'
})

export default popup
