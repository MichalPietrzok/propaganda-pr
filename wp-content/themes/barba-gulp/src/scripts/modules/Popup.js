class Popup {
  constructor(props) {
    this.openButtons = document.querySelectorAll('[data-popup="open"]')
    this.closeButtons = document.querySelectorAll('[data-popup="close"]')
    this.mainWrapper = document.querySelector(props.wrapper)

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
  }
}

export default Popup
