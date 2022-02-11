# Getting data from forms in VueJS

## Getting data from the form without Vuex

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

## Getting data without Vuex and without v-model

This is not something that can work all the time, but this can be useful to have in your toolbox.

From a tutorial by Program With Erik.

https://www.youtube.com/watch?v=K_dSDBC_K_I
https://gist.github.com/ErikCH/97e36f02bcdf856686a210e8361a6e91

    <template>
    <div class="hello">

        <!-- <h1>{{ msg }}</h1> -->
        <form @submit.prevent="submitEvent">
            <fieldset>
                <legend>Test Form</legend>
                <label for="name_field">Name:</label>
                <input id="name_field" type="text" name="name_field">
            </fieldset>

            <button type="submit">Submit Form</button>
        </form>


    </div>
    </template>

    <script>
    // https://www.youtube.com/watch?v=K_dSDBC_K_I
    // https://gist.github.com/ErikCH/97e36f02bcdf856686a210e8361a6e91

    export default {
    name: 'TestForm',
    data() {
        return {
            name: ""
        }
    },
    methods: {
        submitEvent (event) {
            // destructuring, but just with one item
            const { name_field } = Object.fromEntries(new FormData(event.target));
            this.name = name_field;

            console.log("submitted your event");
            console.log(this.name);
        }
    }
    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped lang="scss">
        label {
            margin-right: 10px;
        }
    </style>
