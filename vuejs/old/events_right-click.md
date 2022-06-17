# Right-click event

    <div id="app">
        <button @click.right="rightClick">Right-click event button</button>
    </div>

    [...]

    <script>
        
        let app = Vue.createApp({
            methods: {
                rightClick() {
                    console.log(`right-click`);
                }
            }
        });

        app.mount("#app");

    </script>