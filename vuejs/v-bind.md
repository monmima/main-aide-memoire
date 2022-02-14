# v-bind

Syntax:
- One way-binding, as opposed to view-model.
- **v-bind:** or **:**

## String Injection (binding a string with v-bind)

    <div id="app">
        <p>{{ greeting }}</p>
    </div>

    [...]

    <script>
        let app = Vue.createApp({
            data: function() {
                return {
                    greeting: "Hello Vue 3!"
                }
            }
        });
        app.mount("#app");
    </script>