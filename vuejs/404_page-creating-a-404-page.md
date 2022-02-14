# Creating a 404 page

1. Go to src/views/.
1. Create a new component. You could name it PageNotFound.vue for instance.
1. The code in your component should look like this:

        <template>
            <div>
                404 error. This page wasn't found!
            </div>
        </template>

1. Go to src/router/index.js.
1. Import the PageNotFound component to the file:

        import PageNotFound from '../views/PageNotFound.vue'

1. Add this route in your routes array:

        { path: '/:PageNotFound(.*)*', name: 'PageNotFound', component: PageNotFound },