## V-html

As opposed to <code>v-text</code> and <code>{{ mustache }}</code>, <code>v-html</code> injects HTML instead of raw text.

    <div id="app">
        <p>{{ myString }}</p>
        <p v-html="myString"></p>
    </div>
    
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        
        let app = Vue.createApp({
            data: function() {
                return {
                    myString: "<h1>my-string</h1>"
                }
            }
        });

        app.mount("#app");

    </script>