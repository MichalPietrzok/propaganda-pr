import barba from '@barba/core'
import addSubscriber from './modules/addSubscriber'
import AppState from './core/AppState'
import Page from './core/Page'
import Homepage from './pages/Homepage'
import Raport from './pages/Raport'
import Contact from './pages/Contact'
import Error from './pages/Error'
import Posts from './pages/Posts'
import List from './pages/List'
import { delay } from './core/utils'

barba.init({
  sync: true,
  debug: true,
  transitions: [
    {
      async leave(data) {
        await delay(500)
        return true
      },
      async once(data) {
        await delay(300)
        const $storyForm = document.querySelector('#subscribe-form')
        $storyForm.onsubmit = () => {
          addSubscriber($storyForm)
        }
        Page.firstLoading()
      }
    }
  ],
  views: [
    Homepage,
    Raport,
    Contact,
    List,
    Error,
    ...Posts
  ]
})
