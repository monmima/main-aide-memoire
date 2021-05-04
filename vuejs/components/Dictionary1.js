Vue.component("dictionary-1", {
    props: ["id", "name", "link"],
    data() {
        return {
            fullQuery: this.link
        }
    },

    created() {
        console.log("Dictionary created!");
    },

    methods: {
        handleDictionaryLink() {
            const myInput = document.querySelector(`#${this.id} input`);

            document.querySelector(`#${this.id} a`).setAttribute("href", this.link + myInput.value);
            return;
        }
    },
    // the only difference with a component instead of having the code directly in your HTML is the fact you need to create a template
    template: `
        <div class="m-3" :id="this.id">
            <input v-on:keyup="handleDictionaryLink" />

            <p><a :href="fullQuery" class="btn btn-warning" :title="this.name">Search {{ this.name }}</a></p>
        </div>`
});