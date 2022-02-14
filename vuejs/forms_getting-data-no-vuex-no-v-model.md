# Getting data without Vuex and without v-model

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
