## Getting data from a form, version 2: text input and password input also

The content below is from a [tutorial by Code Step By Step](https://www.youtube.com/watch?v=XRcuxUa-H3k).

Clicking on the Submit button logs to the console the content of the username and password fields.

    <template>
    <div class="about">

        <h1>This is an about page</h1>

        <form @submit.prevent="getForm">
        <p>
            <input type="text" v-model="myForm.username" placeholder="enter user name" />
        </p>
        <p>
            <input type="password" v-model="myForm.password" placeholder="enter user password" />
        </p>

        <button type="submit">Submit</button>
        </form>

    </div>
    </template>

    <script>
    import { defineComponent } from '@vue/composition-api'

    export default defineComponent({
    name: "Login",
    data () {
        return {
            myForm: {
                username: null,
                password: null
            }
        }
    },
    methods: {
        getForm () {
            console.log("getForm called");
            console.log(`username: ${this.myForm.username}`);
            console.log(`password: ${this.myForm.password}`);
            console.log(`myForm content:`, this.myForm);
        }
    }
    })
    </script>