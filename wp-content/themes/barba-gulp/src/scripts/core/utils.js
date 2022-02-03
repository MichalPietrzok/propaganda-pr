import barba from '@barba/core'
import AppState from './AppState'

export const elt = (element) =>
  document.querySelector(element)

// change active element in collection
export const changeActive = (elts, n) => {
  let currentElements = document.querySelectorAll(`.${elts}`);
  for (let i = 0; i < currentElements.length; i++) {
    if (currentElements[i]) {
      currentElements[i].classList.remove(`${elts}--active`);
    }
  }
  if (currentElements[n]) {
    currentElements[n].classList.add(`${elts}--active`);
  }
}

// get random number from min to max
export const getRandom = (max) => Math.floor(Math.random() * max)


export const heightBind = (example, target) => {
  if (screen.width > 767) {
    const exampleHeight = document.querySelector(example).offsetHeight
    const $targetEl = document.querySelector(target)
    $targetEl.style.maxHeight = `${exampleHeight}px`
    window.addEventListener('resize', () => {
      heightBind(example, target)
    })
  }
}

// add max height to each item in collection
export const equalHeigth = (targetItems) => {
  let maxHeight = 0;
  const itemsNodeList = document.querySelectorAll(targetItems)
    for (let i = 0; i < itemsNodeList.length; i++) {
      itemsNodeList[i].style.height = 'auto'
      if (maxHeight < itemsNodeList[i].offsetHeight) {
        maxHeight = itemsNodeList[i].offsetHeight;
      }
    }
    for (let i = 0; i < itemsNodeList.length; i++) {
      if (screen.width > 992) {
        itemsNodeList[i].style.height = `${maxHeight}px`
      } else {
        itemsNodeList[i].style.height = 'auto'
      }
    }
}
// add css styles for 
export const addElementStyles = (elements, obj) => {
  const itemsNodeList = document.querySelectorAll(elements)
  Object.keys(obj).map(item => {
    if (!itemsNodeList.length) {
      itemsNodeList[0].style[item] = obj[item]
    } else {
      Array.from(itemsNodeList).map(element => element.style[item] = obj[item])
    }
  })
}

// add max height to each item in collection
export const getCoords = (elem) => {
  let box = elem.getBoundingClientRect();

  let body = document.body;
  let docEl = document.documentElement;

  let scrollTop = window.pageYOffset || docEl.scrollTop || body.scrollTop;
  let scrollLeft = window.pageXOffset || docEl.scrollLeft || body.scrollLeft;

  let clientTop = docEl.clientTop || body.clientTop || 0;
  let clientLeft = docEl.clientLeft || body.clientLeft || 0;

  let top = box.top + scrollTop - clientTop;
  let left = box.left + scrollLeft - clientLeft;

  return {
    top: top,
    left: left
  };
}

// disable links with href same current and add active class 
export const searchCurrentPageLink = () => {
  for (const link of document.querySelectorAll('a')) {
    if (location.href.indexOf(link.href) !== -1) {
      link.classList.add('active-link')
    } else {
      link.classList.remove('active-link')
    }
    if (location.href === link.href) {
      link.style.pointerEvents = 'none'
    } else {
      link.style.pointerEvents = 'all'
    }
  }
}

export const delay = (n = 100) => new Promise((done) => setTimeout(() => done(), n))

export const animateNumber = (callback, from, to, duration) => {
  let start = null,
    animate = timestamp => {
      start = start || timestamp;
      let progress = Math.min((timestamp - start) / duration, 1);
      callback(progress * (to - from) + from);
      if(progress < 1) {
        window.requestAnimationFrame(animate);
      }
    };
  window.requestAnimationFrame(animate);
}

export const flexSize = size =>
  screen.width > 1920 ? `${(size / 1920) * 100}vw` : `${size}px`

export const addLinksBlank = links => {
  if(links.length) {
    return Array.from(links).map(link => {
      link.target = '_blank'
      return link
    })
  }
}

export const paginationStart = (postTypeCounter) => {
  const separator = location.href.includes('?') ? '&' : '?'
  if (!location.href.includes('start=')) {
    barba.go(`${location.href}${separator}start=${AppState[postTypeCounter]}`)
  }
} 

export const includesAll = (arr, values) => values.every(v => arr.includes(v))