# Components

There are two ways you can create new components.

## Directly in your main VueJS file

You can create a new component within your main VueJS file.

    <div id="app">
        <component></component>
    </div>

    [...]

    let app = Vue.createApp({
        data: function() {
            return {

            }
        }
    });

    app.component("my-component", {
        template: `
            <div>
                component
            </div>
        `
    });

## In a more modular way

1. Go to /src/components.
1. Create a new component file such as Component.vue.
1. It should look like this:

        <template>
            test
        </template>

        <script>
            export default {
                name: 'Component'
            }
        </script>
        
1. Go to /src/views/Home.vue (assuming this is the name of the file where you want to import your component).
1. Create an instance of your component using the following syntax inside of your template:

        <Component />

1. Import and export your component between the <code>script</code> tags. It should look like this:

        <script>
            import Dropdown from '../components/Dropdown.vue'
            import Modal from '../components/Modal.vue'

            export default ({
                components: {
                Dropdown,
                Modal
                }
            });
        </script>