# V-once

The v-once directive sets a string as static HTML.

    <div id="app">
        <p v-once>{{ myString }}</p>
        <p>{{ myString }}</p>
        <p><input type="text" v-model="myString"></p>
    </div>
    
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        
        let app = Vue.createApp({
            data: function() {
                return {
                    myString: "string of text"
                }
            }
        });

        app.mount("#app");

    </script>