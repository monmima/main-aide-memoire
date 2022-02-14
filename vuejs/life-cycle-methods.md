# Life-cycle methods

    <div id="app">
        Showing how the lifecycle methods work.
    </div>
    
    <script>
        let app = Vue.createApp({
            data() {

            },
            methods() {

            },
            created: function() {
                console.log("created");
            },
            mounted: function() {
                console.log("mounted");
            },
            updated: function() {
                console.log("updated");
            }
        });

        app.mount("#app");
    </script>