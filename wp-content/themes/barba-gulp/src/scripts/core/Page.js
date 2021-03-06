import { searchCurrentPageLink, startScroll } from './utils'
import mainHeader from './../modules/Header'
import mainFooter from './../modules/Footer'
import addSubscriber from './../modules/addSubscriber'
import popup from '../modules/Popup'

export default class Page {
  constructor(props) {
    this.namespace = props.pageName
    this.beforeEnterFunction = props.beforeEnter
    this.afterEnterFunction = props.afterEnter
    this.beforeLeaveFunction = props.beforeLeave || function() { return false}
  }

  static firstLoading() {
    startScroll()
    const $storyForm = document.querySelector('#subscribe-form')
    $storyForm.onsubmit = () =>  addSubscriber($storyForm)
    
    gsap.timeline()
      .to('.site', { opacity: 1 })
      .fromTo('.main-info', { opacity: 0 }, { opacity: 1 }, '+=.1')
  }

  beforeEnter() {
    startScroll()
    this.beforeEnterFunction()
  }

  afterEnter() {
    searchCurrentPageLink()
    popup.searchOpenButtons()
    mainFooter.showAnimation()
    setTimeout(()=> {
      gsap.timeline().to('.site-content', { opacity: 1 })
      this.afterEnterFunction()
    }, 0)
  }
  beforeLeave() {
    gsap.timeline().to('.site-content', { opacity: 0 })
    mainFooter.hideAnimation()
    mainHeader.closeMenu()
    setTimeout(()=> {
      this.beforeLeaveFunction()
    }, 0)
  }
}
