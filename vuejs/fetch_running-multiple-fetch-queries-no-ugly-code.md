## Running multiple fetch queries without having ugly code

This code sample is inspired by [material from www.pluralsight.com](https://www.pluralsight.com/guides/handling-nested-http-requests-using-the-fetch-api).

    <script>

    export default ({
        data() {
            return {
                response: {},
                response2: {},
                response3: {},
                arrEvo: [],
                id: 0
            }
        },
        methods: {
            findIndexOfPokemon(str) {
                return this.arrEvo === str;
            },
            async fetchOne() {

            // 

                this.response = await fetch(`https://pokeapi.co/api/v2/pokemon/${this.$route.params.id}/`).then(response => response.json());

                await console.log(this.response);

                this.response2 = await fetch(`https://pokeapi.co/api/v2/pokemon-species/${this.$route.params.id}/`).then(response => response.json());

                await console.log(this.response2);

                this.response3 = await fetch(`${this.response2.evolution_chain.url}`).then(response => response.json());

                await console.log(this.response3);

            } // end of fetchOne
        }, // end of methods
        mounted: function() {
            this.fetchOne();
        }
    });

    </script>