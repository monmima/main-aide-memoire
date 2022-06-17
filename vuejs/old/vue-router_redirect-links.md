# Redirect links

The information in this part of the aide-mémoire is inspired by content from [The Net Ninja's tutorial on vue-router](https://www.youtube.com/watch?v=juocv4AtrHo).

Your router/index.js file:

    const routes = [
      {
        path: '/about',
        name: 'about',
        component: AboutView
      },
      {
        path: '/old-page',
        redirect: '/'
      }
    ]