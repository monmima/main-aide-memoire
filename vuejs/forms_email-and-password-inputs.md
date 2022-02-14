## Getting data from a form, version 1: email input and password input

    <div id="app">
        <form @submit.prevent="handleSubmit">
            <input input="email" v-model="email" >
            <input input="password" v-model="password" >
            <button>Log in</button>
        </form>
    </div>

    [...]

    <script>
        
        let app = Vue.createApp({
            data() {
                return {
                    email: "",
                    password: ""
                }
            },
            methods: {
                handleSubmit() {
                    console.log(this.email, this.password, "submitted");
                }
            }
        });

        app.mount("#app");

    </script>