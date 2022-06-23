## Adding a component to a project with import and export

A default HelloWorld component already exists in the project created with Vue CLI.

1. Go to components/.
1. Create a component like this:

        <template>
            <hr>
            <small>September 2021</small>
        </template>

        <script>
            export default {
            name: 'Footer'
            }
        </script>

1. Go to src/App.vue.
1. Import and export the new component like this:

        <script>
            import Footer from './components/Footer.vue'

            export default {
                name: 'App',
                components: {
                    Footer
                }
            }
        </script>