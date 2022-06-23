## Emitting an event without using $emit

The following example is from a [Tutorial by Code Step By Step
on YouTube](https://www.youtube.com/watch?v=nZY4y02bMTw). 

Parent component:

    <template>
        <div class="home">
            <div>Parent component name: {{ username }}</div>
            <User :getUser="getUser" />
        </div>
    </template>

    <script>
    // @ is an alias to /src
    // import HelloWorld from '@/components/HelloWorld.vue'
    import User from '../components/User.vue'

    export default {
        name: 'Home',
        data () {
            return {
            username: "test"
            }
        },
        components: {
            // HelloWorld
            User
        },
        methods: {
            getUser (name) {
            alert(name);

            this.username = name;
            }
        }
    }
    </script>

Child component:

    <template>
    <div>
        <h1>{{ message }}</h1>
        <Input :msg="message" @messageChanged="message = $event" />
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

