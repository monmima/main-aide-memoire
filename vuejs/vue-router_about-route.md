# About route

By default, the About route looks like this:

    {
        path: '/about',
        name: 'about',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
    }

But you can change it to this and it will work just fine.

    {
        path: '/about',
        name: 'about',
        component: AboutView
    }

As long as you add this import statement as well.

    import AboutView from '../views/AboutView.vue'