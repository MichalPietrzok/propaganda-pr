class Footer {
  constructor() {
    this.mainWrap = document.querySelector('.site-footer')
  }

  hideAnimation() {
    this.animationLine.to(this.mainWrap, { opacity: 0 })
  }

  showAnimation() {
    this.animationLine.to(this.mainWrap, { opacity: 1 })
  }
}

const mainFooter = new Footer()

export default mainFooter
