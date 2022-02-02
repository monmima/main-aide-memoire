# Getting data from forms in VueJS

## Getting data from the data without Vuex

Based on [Code Step by Step's Vue js tutorial for beginners #15 Make form and get data](https://www.youtube.com/watch?v=XRcuxUa-H3k).

Below is an example of how to get data from a form.

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

## Getting data from forms using Vuex

Based on [ Make Apps with Danny's Learn Vuex in 30 MINUTES! (Vue JS 3)](https://www.youtube.com/watch?v=nFh7-HfODYY).

Paste this code in your view:

    <template>
        <div class="counter" :style="{ color: $store.state.colorCode }">
            {{ $store.state.str }}
        </div>
        <div class="buttons">
        </div>
        <input type="text" placeholder="Enter color code" v-model="superColorCode">
    </template>

    <script>
    import { defineComponent } from '@vue/composition-api'

    export default defineComponent({
        name: 'About',
        computed: {
        superColorCode: {
            get () {
                return this.$store.state.colorCode;
            },
            set (newValue) {
                console.log("I'm triggered every time the text value in the text input is changed.");
                console.log(newValue);
                this.$store.commit("setColorCode", newValue);
            }
        }
        }
    })
    </script>

    <style scoped>
    div {
        margin-bottom: 10px;
    }

    .buttons button {
        font-size: 30px;
        margin: 0 10px;
        width: 100px;
    }

    .counter {
        font-size: 80px;
    }
    </style>

Paste this in your store. You store should have been created at the moment you used the Vue CLI to create your project is you choose the right options manually.

    import { createStore } from 'vuex'

    export default createStore({
    state: {
        str: "Type the name of a color.",
        colorCode: "red"
    },
    mutations: {
        setColorCode (state, newValue) {
        state.colorCode = newValue;
        }
    },
    actions: {
    },
    modules: {
    }
    })
