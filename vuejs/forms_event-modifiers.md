## Event modifiers

To prevent a submit event from reloading the page:

    <div id="app">
        <form @submit.prevent="handleSubmit">
            <input input="email">
            <input input="password">
            <button>Log in</button>
        </form>
    </div>

    [...]

    <script>
        
        let app = Vue.createApp({
            methods: {
                handleSubmit() {
                    console.log("submitted");
                }
            }
        });

        app.mount("#app");

    </script>