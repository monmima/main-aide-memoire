## Getting data from a form, version 3: text input, password input also, checkbox and radio button

The content below is from a [tutorial by Code Step By Step](https://www.youtube.com/watch?v=TyWBQ05J_R0).

    <template>
    <div class="home">

        <div>
        <h1>Form with checkbox and radio button in VueJS</h1>
        </div>

        <form @submit.prevent="getForm">
        <p><input type="text" placeholder="enter username" v-model="myForm.username"></p>
        <p><input type="password" placeholder="password" v-model="myForm.password"></p>

        <p>Hobbies</p>
        <div>
            <input type="checkbox" value="travelling" id="travelling" v-model="myForm.hobbies">
            <label for="travelling">travelling</label>
        </div>
        <div>
            <input type="checkbox" value="sports" id="sports" v-model="myForm.hobbies">
            <label for="sports">sports</label>
        </div>

        <p>Gender</p>
        <div>
            <input type="radio" value="male" id="male" v-model="myForm.gender">
            <label for="male">Male</label>
        </div>
        <div>
            <input type="radio" value="female" id="female" v-model="myForm.gender">
            <label for="female">Female</label>
        </div>

        <p><button type="submit">Submit</button></p>
        </form>
    </div>
    </template>

    <script>
    // @ is an alias to /src

    export default {
    name: 'Home',
    data() {
        return {
        myForm: {
            username: null,
            password: null,
            hobbies: [],
            gender: null
        }
        }
    },
    methods: {
        getForm() {
        console.log("This is the content of the form:");
        console.log(this.myForm);

        }
    }
    }
    </script>