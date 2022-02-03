import Page from './../core/Page'

const List = new Page({
  pageName: 'list',
  beforeEnter: () => {
  },
  afterEnter: () => {
    setTimeout(() => {
      const listWarapper = document.querySelector('[data-list="wrapper"]')
      const listItmes = listWarapper.querySelectorAll('.list__item')
      const showButton = document.querySelector('[data-list="button"]')
      let itemsCount = 0

      for (let i = 0; i <= listItmes.length; i++) {
        itemsCount++
      }

      itemsCount >= 1 ? showButton.style.display = 'block' : showButton.style.display = 'none'

      showButton.addEventListener('click', () => {
        listWarapper.style.maxHeight = '2000px'
        showButton.style.display = 'none'
      })
    }, 0)
  }
})

export default List
