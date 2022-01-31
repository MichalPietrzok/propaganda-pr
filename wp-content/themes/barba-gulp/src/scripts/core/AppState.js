import gsap from 'gsap'
import ScrollTrigger from 'gsap/ScrollTrigger'
gsap.registerPlugin(ScrollTrigger);
window.ScrollTrigger = ScrollTrigger;
window.gsap = gsap;

const AppState = {
  needReload: false,
  currentNewsPage: 1
}

export default AppState
