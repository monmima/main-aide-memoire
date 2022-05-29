# Getting data from forms using Vuex

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