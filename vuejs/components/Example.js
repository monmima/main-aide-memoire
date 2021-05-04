Vue.component("example", {
    props: ["name"],
    data() {
        return {
            message: "Example"
        }
    },
    mounted() {
        console.log(`Example ${this.name} instance was mounted!`);
    },
    // the only difference with a component instead of having the code directly in your HTML is the fact you need to create a template
    template: `<h3 class="center">Example {{this.name}}</h3>`
});