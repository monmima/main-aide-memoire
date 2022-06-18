## Toggling

    <div id="app" v-cloak>
        <button v-on:click="isVisible = !isVisible">Toggle Box</button>

        <div class="box" v-if="visible"></div>
    </div>

    [...]

    <script>
        let app = Vue.createApp({
            data: function() {
                return {
                    visible: true
                }
            }
        });

        app.mount("#app");
    </script>

or

    <div id="app" v-cloak>
        <button @click="toggle">Toggle</button>

        <div class="box" v-if="visible"></div>
    </div>

    [...]

    <script>
        let app = Vue.createApp({
            data: function() {
                return {
                    visible: true
                }
            },
            methods: {
                toggle() {
                    this.visible = !this.visible
                }
            }
        });

        app.mount("#app");
    </script>