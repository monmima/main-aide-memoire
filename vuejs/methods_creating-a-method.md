## Creating a method

    <div id="app" v-cloak>
        <button @click="addCount">Add to count</button>
    </div>

    [...]

    <script>
        
        let app = Vue.createApp({
            data: function() {
                return {
                    count: 0
                }
            },
            methods: {
                addCount() {
                    this.count++;
                    console.log(this.count);
                }
            }
        });

        app.mount("#app");

    </script>