# Vue-router: passing route parameters as props

The information in this part of the aide-mémoire is inspired by content from [The Net Ninja's tutorial on vue-router](https://www.youtube.com/watch?v=juocv4AtrHo).

To use a route parameters as props instead of refering to the route object, you have to do two things:

1. Set `props` to `true` in the router:

        {
          path: '/jobs/:id',
          name: 'JobDetails',
          component: HomeView,
          props: true
        },

1. Refer to the name of the props instead of the name of the route and make sure your component where you pass the props has a props array. The code which is commented out is left on purpose so you can compare.

        <template>
          <h1>Job Details Page</h1>

          <!-- <p>The job id is {{ this.myId }}.</p> -->
          <p>The job id is <strong>{{ id }}</strong> (= props).</p>
        </template>

        <script>
        export default {
          props: ['id']
        }
        </script>
