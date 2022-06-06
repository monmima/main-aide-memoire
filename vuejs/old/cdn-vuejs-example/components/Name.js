Vue.component("name", {
    data() {
        return {
            message: "VueJS Aide-Mémoire"
        }
    },
    mounted() {
        console.log("Name instance was mounted!");
    },
    // the only difference with a component instead of having the code directly in your HTML is the fact you need to create a template
    template: `<h1 class="center">{{ message }}</h1>`
});