import Page from './../core/Page'

const List = new Page({
  pageName: 'list',
  beforeEnter: () => {
  },
  afterEnter: () => {
    const listWarapper = document.querySelector('[data-list="wrapper"]')
    const listItmes = listWarapper.querySelectorAll('.list__item')
    const showButton = document.querySelector('[data-list="button"]')

    const usersLimit = screen.width > 767 ? 60 : 20
    gsap.set(showButton.parentNode, {
      display: listItmes.length >= usersLimit
        ? 'block' : 'none'
    })
    if (listItmes.length >= usersLimit) listWarapper.classList.add('limited')

    showButton.addEventListener('click', () => {
      const animatiopn = gsap.timeline()
        .to(listWarapper, { maxHeight: '2000', duration: 2 })
        .to(showButton.parentNode, { display: 'none' }, '<')
    })
  }
})

export default List
