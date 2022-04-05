# Route parameters

**Important!** Refer to **vue-router_dynamic-routing.md** to see what this associated file would look like:

- JobList.vue

The information in this part of the aide-mémoire is inspired by content from [The Net Ninja's tutorial on vue-router](https://www.youtube.com/watch?v=juocv4AtrHo).

## Some information

The changeable part of a route is known as a route parameter. In view, your represent route parameters with a colon and then the parameter name (/jobs/**:id**). You can name the parameter whatever you like, but often people use **:id**.

## An example

Your JobDetails.vue component. Remember that your parameter (`$route.params.id`) can be anything as long as it matches the name in your route (`/jobs/:id`).

    <template>
        <h1>Job Details Page</h1>

        <p>The job id is {{ $route.params.id }}.</p>
    </template>

Your `jobs/:id` route in **router/index.js**:

    {
        path: '/jobs/:id',
        name: 'JobDetails',
        component: JobDetails
    }

You can also access your ID within your script like this:

    <template>
        <h1>Job Details Page</h1>

        <p>The job id is {{ this.myId }}.</p>
    </template>

    <script>
    export default {
        data () {
            return {
                myId: this.$route.params.id
            }
        }
    }
    </script>
