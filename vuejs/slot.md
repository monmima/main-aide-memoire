## Using the <code>slot</code> tag for default content

Please keep in mind that the <code>slot</code> tag is now deprecated. Ideally, you should use the v-slot directive instead.

    <div id="app">
        <buttbutt></buttbutt>
        <buttbutt>Custom</buttbutt>
    </div>
    
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        
        let app = Vue.createApp({

        });

        app.component("buttbutt", {
            template: `
                <button>
                    <slot>Default</slot>
                </button>
            `
        });

        app.mount("#app");

    </script>