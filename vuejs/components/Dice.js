Vue.component("dice", {
    props: ["num"],
    data() {
        return {
            diceResult: 0
        }
    },
    created() {
        console.log("Dice created!");
    },
    methods: {
        throwDice(num) {
            this.diceResult = Math.floor(Math.random() * this.num + 1);
        },
        test() {
            document.querySelector("#dice-result").innerHTML = this.diceResult;
        }
    },
    // the only difference with a component instead of having the code directly in your HTML is the fact you need to create a template
    template: `
        <div class="m-3">
            <button class="btn btn-primary" @click="throwDice()">Throw a d{{this.num}} dice!</button>
            <div class="diceDisplay">{{ diceResult > 0 ? "Result: " + diceResult : "Result: -"}}</div>
        </div>`
    

});