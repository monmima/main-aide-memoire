## Passing an ID to the view

1. Install view-router if it's not included in your project already.
1. Go to src/router/index.js.
1. Create a route such as:

        path: '/about/:id'

1. Go to your view.
1. Make your view return something like this:

        export default ({
            data() {
                return {
                    id: 0
                }
            },
            mounted() {
                this.id = this.$route.params.id;
            }
        });

1. Use the curly brackets in your template to make it return the id:

        <template>
            <div class="about">
                <h1>This is an about page {{ id }}</h1>
            </div>
        </template>

1. Remember that you have to use the new path (/:id) to view something in your browser.

## Another way of passing data to the view

    <template>
        <div class="about">
            <h1>This is an about page {{ this.$route.params.id }}</h1>
        </div>
    </template>
