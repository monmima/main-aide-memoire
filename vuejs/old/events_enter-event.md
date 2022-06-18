## Keyup event after pressing Enter

    <div id="app">
        <input type="text" @keyup.enter="greet(name)" v-model="name">
    </div>

    [...]

    <script>
        
        let app = Vue.createApp({
            data: function() {
                return {
                    name: "name"
                }
            },
            methods: {
                greet(name) {
                    console.log(`hello ${name}`);
                }
            }
        });

        app.mount("#app");

    </script>