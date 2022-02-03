class Popup {
  constructor(props) {
    this.openButtons = document.querySelectorAll('[data-popup="open"]')
    this.closeButtons = document.querySelectorAll('[data-popup="close"]')
    this.thanksPopup = document.querySelector('[data-popup="thanks"]')
    this.signButton = document.querySelector('[data-popup="sign"]')
    this.checkbox = document.querySelectorAll('input[type="checkbox"]')
    this.inputs = document.querySelectorAll('input')
    this.mainWrapper = document.querySelector(props.wrapper)
    this.name = document.querySelector('[data-popup="name"]')
    this.email = document.querySelector('[data-popup="email"]')

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
    this.mainWrapper.style.display = 'block';
  }

  closePopup() {
    this.mainWrapper.style.display = 'none';
    this.thanksPopup.style.display = 'none';
  }

  // displayThanks() {
  //   this.mainWrapper.style.display = 'none';
  //   this.thanksPopup.style.display = 'block';
  // }

  validation() {
    const check = Array.from(this.checkbox).every(checkbox => checkbox.checked)
    const name = this.name.value.length >= 3
    const email = this.email.value.length > 8 && this.email.value.includes('@') && this.email.value.includes('.')
    this.signButton.disabled = ![check, name, email].every(input => input === true)
    return { name, email, check }
  }
}

export default Popup
