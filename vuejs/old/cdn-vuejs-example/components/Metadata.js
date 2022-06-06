Vue.component("metadata", {
    props: ["num"],
    data() {
        return {
            contentTitle: 0,
            contentTextarea: 0
        }
    },
    created() {
        console.log("Dice created!");
    },
    mounted() {
        this.updateLengthDesc(50, 60, '#metatitle');
        this.updateLengthDesc(120, 158, '#metadescription');
    },
    methods: {
        updateLengthDesc(min, max, domElement) {

            const content = document.querySelector(`${domElement} textarea`).value;
            let color;

            if (content.length >= min && content.length <= max) {
                color = "green";
            } else {
                color = "red";
            }

            document.querySelector(`${domElement} textarea`).style.borderColor = color;
            document.querySelector(`${domElement} span`).innerHTML = content.length;
        }
    },
    // the only difference with a component instead of having the code directly in your HTML is the fact you need to create a template
    template: `
        <div class="m-3">

            <div id="metatitle">
                <p>Meta Title (<span></span> characters)</p>
                <p><small>* Should remain between 50 and 60.</small></p>
                <p><textarea rows="5" cols="30" v-on:keyup="updateLengthDesc(50, 60, '#metatitle')"></textarea></p>
            </div>

            <div id="metadescription">
                <p>Meta Description (<span></span> characters)</p>
                <p><small>* Should remain between 120 and 158.</small></p>
                <p><textarea rows="5" cols="30" v-on:keyup="updateLengthDesc(120, 158, '#metadescription')"></textarea></p>
            </div>

        </div>`
});