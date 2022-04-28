# Emitting events with $emit() - example 2

The content below is from a coworker, with minor modifications from me.

This is the code for the parent component:

    <template>
    <div class="home">

        <CustomInput title="Custom Input" v-model="testData"/>
        <CustomInput title="Custom Input 2" v-model="testData2"/>

        <p><button type="button" @click="submit">Go</button></p>

        <div>Résultat: {{ results }}</div>
        <div>Résultat 2: {{ results2 }}</div>

    </div>
    </template>

    <script lang="ts">
    import { defineComponent } from 'vue'
    import CustomInput from '@/components/CustomInput.vue' // @ is an alias to /src

    export default defineComponent({
    name: 'Home',
    components: {
        CustomInput
    },
    data () {
        return {
        testData: "",
        results: "",
        testData2: "",
        results2: ""
        }
    },
    methods: {
        submit () {
        this.results = this.testData;
        this.results2 = this.testData2;
        }
    }
    })
    </script>

This is the code for the child component. In this example, the component is called <code>InputQuestionnaire.vue</code>.

    <template>
    <div class="home">

        <p>{{ title }}</p>

        <p><input type="text" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" /></p>

    </div>
    </template>

    <script lang="ts">
    import { defineComponent } from 'vue'

    export default defineComponent({
    name: 'InputQuestionnaire',
    props: {
        title: {
        type: String,
        required: true
        },
        modelValue: {
        type: String,
        required: true
        }
    },
    emits: ["update:modelValue"]
    })
    </script>
