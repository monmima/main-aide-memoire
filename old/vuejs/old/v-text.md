## V-text

The v-text directive is just an alternative to the mustache syntax. Therefore, it is not necessary to use it if you already feel comfortable with mustache (brackets).

    <div id="app">
        <p v-text="myString"></p>
        <p>{{ myString }}</p>
    </div>
    
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        
        let app = Vue.createApp({
            data: function() {
                return {
                    myString: "my-string"
                }
            }
        });

        app.mount("#app");

    </script>