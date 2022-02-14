# Emitting events with $emit()

The content below is from a [tutorial by Academind on YouTube](https://www.youtube.com/watch?v=PPmg7ntQjzc).

This is very useful to break down a form into input components.

This is the code for the parent component:

    <template>
    <div>
        <h1>{{ message }}</h1>
        <Input :msg="message" @messageChanged="this.message" />
    </div>
    </template>

    <script>
    import Input from '@/components/Input.vue'

    export default {
        components: {
        Input
        },
        data() {
        return {
            message: "This is a great message."
        }
        }
    }
    </script>

This is the code for the child component. In this example, the component is called <code>Input.vue</code>.

    <template>
    <div>
        <!-- would create a mutation error message -->
        <!-- <input type="text" v-model="msg"> -->

        <input type="text" :value="msg" @input="changeMessage">
        <p>{{ message }}</p>
    </div>
    </template>

    <script>
    export default {
    props: ['msg'],
    data() {
        return {
        message: ""
        }
    },
    methods: {
        changeMessage(event) {
        // getting the value in the message variable
        this.message = event.target.value;
        // passing the value to the parent
        // first argument = name of the event
        // second argument = value or values to pass
        this.$emit('messageChanged', this.message);
        }
    }
    }
    </script>