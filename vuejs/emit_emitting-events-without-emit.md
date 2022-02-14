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
        <h2>User component:</h2>
        <button @click="getUser(userName)">Send user name to parent</button>
    </template>

    <script>
    import { defineComponent } from '@vue/composition-api'

    export default defineComponent({
        name: "User",
        data () {
            return {
                userName: "Peter"
            }
        },
        props: {
            getUser:Function
        }
    })
    </script>


