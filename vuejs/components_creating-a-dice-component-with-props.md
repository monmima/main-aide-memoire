## Creating and using a dice component with a props

    <div id="app">
        <example-props num="4"></example-props>
        <example-props num="10"></example-props>
    </div>

    [...]

    <script>
        let app = Vue.createApp({
            data: function() {
                return {

                }
            }
        });

        app.component("example-props", {
            template: `
                <div class="m-3">
                    <button @click="throwDice()">Throw a d{{this.num}} dice!</button>
                    <div class="diceDisplay">{{ diceResult > 0 ? "Result: " + diceResult : "Result: -"}}</div>
                </div>
            `
            data() {
                return {
                    diceResult: 0
                }
            },
            props: ["num"],
            methods: {
                throwDice(num) {
                    this.diceResult = Math.floor(Math.random() * this.num + 1);
                },
            },

        });

        app.mount("#app");
    </script>