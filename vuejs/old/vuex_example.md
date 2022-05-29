## Example 2

The code samples from this example are from [Learn Vuex in 30 MINUTES! (Vue JS 3) by Make Apps with Danny
](https://www.youtube.com/watch?v=nFh7-HfODYY).

Change your view so it looks like this:

    <template>
        <div class="counter" :style="{ color: $store.state.colorCode }">
            <!-- {{ counter }} -->
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

Change store/index.js so it looks like this:

    Change your view so it looks like this:

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
