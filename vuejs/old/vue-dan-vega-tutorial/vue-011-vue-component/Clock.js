Vue.component("clock", {
    props: ["format"],
    data() {
        return {
            message: "Hello, Vue!",
            now: new Date()
        }
    },
    created() {
        console.log("Created!");
    },
    methods: {
        updateDate() {
            const d = this.format === "short" ? new Date().toLocaleTimeString() : new Date();
            this.now = d;
        }
    },
    mounted() {
        console.log("Vue instance was mounted!");
        setInterval(() => {
            this.updateDate();
        }, 1000);
    },
    // the only difference with a component instead of having the code directly in your HTML is the fact you need to create a template
    template: `<div class="clock">{{ now }}</div>`
});