# Vuex

## Parts of the store

- The **state** is where you store the data of an app.
- The **mutations** are methods that change the data that is in the state. The only way you can change data in the state is with mutations. Mutations are synchronous only.
- The **actions** are methods. They cannot change data in the state. They can only access data that's in the state. You can have asynchrnous code in the mutations.
- The **getters** allow you to access data that's in the state.
- The **modules** allow you to break up the store into multiple modules. Each of them can have their own state, mutations, actions and getters.

## Installing Vuex and creating a simple store

The easiest way to add Vuex in a project is to install it from the get-go, by selecting the manual installation, just after you typed this:

    vue create [my-project]

The same goes for vue-router, SASS, etc.

## Creating a simple counter app (no Vuex at first)

Based on [ Make Apps with Danny's Learn Vuex in 30 MINUTES! (Vue JS 3)](https://www.youtube.com/watch?v=nFh7-HfODYY).

Paste this into a view. The state isn't use at this point.

    <template>
        <div class="counter">
            {{ counter }}
        </div>
        <div class="buttons">
            <button @click="decreaseCounter">-</button>
            <button @click="increaseCounter">+</button>
        </div>
    </template>

    <script>
    import { defineComponent } from '@vue/composition-api'

    export default defineComponent({
        name: 'About',
        data () {
            return {
                counter: 0
            };
        },
        methods: {
            decreaseCounter () {
                this.counter--;
            },
            increaseCounter () {
                this.counter++;
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

To turn the above into something that uses the state, replace it with this:

    <template>
        <div class="counter">
            <!-- {{ counter }} -->
            {{ $store.state.counter }}
        </div>
        <div class="buttons">
            <!-- <button @click="decreaseCounter">-</button>
            <button @click="increaseCounter">+</button> -->
            <button @click="$store.commit('decreaseCounter')">-</button>
            <button @click="$store.commit('increaseCounter')">-</button>
        </div>
    </template>

    <script>
    import { defineComponent } from '@vue/composition-api'

    export default defineComponent({
        name: 'About'
        // data () {
        //     // return {
        //     //     counter: 0
        //     // };
        // },
        // methods: {
        //     // decreaseCounter () {
        //     //     this.counter--;
        //     // },
        //     // increaseCounter () {
        //     //     this.counter++;
        //     // }
        // }
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

You also need to replace the code in your store with the following:

    import { createStore } from 'vuex'

    export default createStore({
    state: {
        counter: 0
    },
    mutations: {
        decreaseCounter (state) {
            state.counter--;
        },
        increaseCounter (state) {
            state.counter++;
        }
    },
    actions: {
    },
    modules: {
    }
    })

The proof that your state works is that the number from the counter is not reset to zero everytime you refresh the page.