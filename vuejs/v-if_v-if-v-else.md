# v-if, v-else-if, v-else

    <div id="app">
        <h1>VueJS Directives</h1>
        <h3>v-if, v-else-if, v-else</h3>

        <div class="box" v-if="isVisible"></div>
        <div class="box-2" v-else-if="isVisible2"></div>
        <div class="box-3" v-else></div>

    </div>

    [...]

    <script>
        let app = Vue.createApp({
            data: function() {
                return {
                    isVisible: false,
                    isVisible2: true
                }
            }
        });
        app.mount("#app");
    </script>