import Page from './../core/Page'

const Homepage = new Page({
  pageName: 'homepage',
  beforeEnter: () => {
  },
  afterEnter: () => {
    const sections = document.querySelectorAll('section')
    sections.forEach(section => {
      gsap.set(section, { opacity: 0 })
      gsap.to(section, {
        duration: 2,
        opacity: 1,
        scrollTrigger: {
          start: 'top +70%',
          trigger: section,
        }
      })
    })
  }
})

export default Homepage
