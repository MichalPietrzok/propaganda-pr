import Page from './../core/Page'

const arrSiglePosts = singlePostCounter.split(', ')
const Posts = []

for (const item of arrSiglePosts) {
  Posts.push(new Page({
    pageName: `post-${item}`,
    beforeEnter: () => {
    },
    afterEnter: () => {
    }
  }))
}

export default Posts
