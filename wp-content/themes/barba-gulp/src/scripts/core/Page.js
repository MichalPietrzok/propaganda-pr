import { searchCurrentPageLink } from './utils'
import mainHeader from './../modules/Header'
import mainFooter from './../modules/Footer'
import addSubscriber from './../modules/addSubscriber'
import Popup from '../modules/Popup'

export default class Page {
  constructor(props) {
    this.namespace = props.pageName
    this.beforeEnterFunction = props.beforeEnter
    this.afterEnterFunction = props.afterEnter
    this.beforeLeaveFunction = props.beforeLeave || function() { return false}
  }

  static firstLoading() {
    const $storyForm = document.querySelector('#subscribe-form')
    $storyForm.onsubmit = () =>  addSubscriber($storyForm)
    
    gsap.timeline()
      .to('.site', { opacity: 1 })
      .fromTo('.main-info', { opacity: 0 }, { opacity: 1 }, '+=.1')
  }

  beforeEnter() {
    window.scrollTo({
      top: 0,
      behavior: 'instant'
    })
    this.beforeEnterFunction()
  }

  afterEnter() {
    searchCurrentPageLink()
    mainFooter.showAnimation()
    const popup = new Popup({
      wrapper: '.page-popup'
    })
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
