Vue.component("food", {
    data() {
        return {
            favoriteFoods: [
                { name: "foie gras", dfn: "a pâté made from goose liver (marinated in cognac) and truffles", link: "https://en.wikipedia.org/wiki/Foie_gras", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Foie_gras_en_cocotte.jpg/250px-Foie_gras_en_cocotte.jpg" },
                { name: "coq au vin", dfn: "chicken and onions and champignons braised in red wine and seasonings", link: "https://en.wikipedia.org/wiki/Coq_au_vin", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Gourmet_coq_au_vin.jpg/250px-Gourmet_coq_au_vin.jpg" },
                { name: "boeuf bourguignon", dfn: "a beef stew braised in red wine", link: "https://en.wikipedia.org/wiki/Beef_bourguignon", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/Julia_Child%27s_Boeuf_Bourguignon.jpg/220px-Julia_Child%27s_Boeuf_Bourguignon.jpg" },
                { name: "escargots de Bourgogne", dfn: "edible snail, especially one prepared as an appetizer or entrée", link: "https://en.wikipedia.org/wiki/Escargots", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Escargot_trick.jpg/300px-Escargot_trick.jpg" },
                { name: "cassoulet", dfn: "a rich, slow-cooked casserole containing meat", link: "https://en.wikipedia.org/wiki/Cassoulet", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Bowl_of_cassoulet.JPG/320px-Bowl_of_cassoulet.JPG" },
                { name: "crêpes", dfn: "a type of very thin pancake", link: "https://en.wikipedia.org/wiki/Cr%C3%AApe", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Crepes_dsc07085.jpg/250px-Crepes_dsc07085.jpg" },
                { name: "confit de canard", dfn: "meat cooked slowly in its own fat", link: "https://en.wikipedia.org/wiki/Confit_de_canard", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Confitdecanard.jpg/250px-Confitdecanard.jpg" },
                { name: "quiche", dfn: "a French tart consisting of pastry crust", link: "https://en.wikipedia.org/wiki/Quiche", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Quiche.jpg/250px-Quiche.jpg" },
                { name: "pain au chocolat", dfn: "a type of viennoiserie sweet roll", link: "https://en.wikipedia.org/wiki/Pain_au_chocolat", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Pain_au_chocolat_Luc_Viatour.jpg/220px-Pain_au_chocolat_Luc_Viatour.jpg" },
                { name: "macarons", dfn: "a sweet meringue-based confection", link: "https://en.wikipedia.org/wiki/Macaron", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/VanillaMacaron.jpg/220px-VanillaMacaron.jpg" },
            ]
        }
    },
    mounted() {
        console.log("Food instance was mounted!");
    },
    // the only difference with a CDN component instead of having the code directly in your HTML is the fact you need to create a template
    template: 
    `<div class="grid">
        <figure v-for="(food, index) in favoriteFoods" v-bind:key="index">
            <div class="center-image">
                <img v-bind:src="food.img" v-bind:alt="food.img">
            </div>

            <a v-bind:href="food.link" :title="food.name" :class="food.name">{{ food.name }}</a>
            <div>{{ food.dfn }}</div>
        </figure>
    </div>`
});