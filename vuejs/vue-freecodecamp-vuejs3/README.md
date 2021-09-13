

## Barebone VueJS 3 with CDN

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div id="app">
            <h1>Simple JS injection</h1>
            <p>{{ greeting }}</p>
        </div>
        

        <script src="https://unpkg.com/vue@next"></script>
        <script>
            let app = Vue.createApp({
                data: function() {
                    return {
                        greeting: "Hello Vue 3!"
                    }
                }
            });
            app.mount("#app");
        </script>
    </body>
    </html>

## String Injection (binding a string)

    <div id="app">
        <p>{{ greeting }}</p>
    </div>

    [...]

    <script>
        let app = Vue.createApp({
            data: function() {
                return {
                    greeting: "Hello Vue 3!"
                }
            }
        });
        app.mount("#app");
    </script>

## Two-way data binding

    <div id="app">
        <div>
            <p>{{ greeting }}</p>
            <p><input v-model="greeting" /></p>
        </div>
    </div>

    [...]

    <script>
        let app = Vue.createApp({
            data: function() {
                return {
                    greeting: "Hello Vue 3!"
                }
            }
        });
        app.mount("#app");
    </script>

## v-if

    <div v-if="isVisible" class="box">v-if box</div>

    [...]

    <script>
        let app = Vue.createApp({
            data: function() {
                return {
                    isVisible: false
                }
            }
        });
        app.mount("#app");
    </script>

## v-show

    <div v-show="isVisible" class="box">v-show box</div>

    [...]

    <script>
        let app = Vue.createApp({
            data: function() {
                return {
                    isVisible: false
                }
            }
        });
        app.mount("#app");
    </script>

## v-if, v-else-if, v-else

    <div id="app">
        <h1>VueJS Directives</h1>
        <h3>v-if, v-else-if, v-else</h3>

        <div class="box" v-if="isVisible"></div>
        <div class="box-2" v-else-if="isVisible2"></div>
        <div class="box-3" v-else></div>

    </div>

    [...]

    <script>
        let app = Vue.createApp({
            data: function() {
                return {
                    isVisible: false,
                    isVisible2: true
                }
            }
        });
        app.mount("#app");
    </script>

## v-cloak

With v-cloak, your content will show only when it's ready. 

    <style>
        [v-cloak] {
            display: none;
        }
    </style>

    [...]

    <div id="app" v-cloak>
        <h1>My content</h1>
    </div>

## Click event

- v-on:click="isVisible = true"
- @click="isVisible = true"

## Toggling

    <div id="app" v-cloak>
        <button v-on:click="isVisible = !isVisible">Toggle Box</button>

        <div class="box" v-if="visible"></div>
    </div>

    [...]

    <script>
        let app = Vue.createApp({
            data: function() {
                return {
                    visible: true
                }
            }
        });

        app.mount("#app");
    </script>

or

    <div id="app" v-cloak>
        <button @click="toggle">Toggle</button>

        <div class="box" v-if="visible"></div>
    </div>

    [...]

    <script>
        let app = Vue.createApp({
            data: function() {
                return {
                    visible: true
                }
            },
            methods: {
                toggle() {
                    this.visible = !this.visible
                }
            }
        });

        app.mount("#app");
    </script>

## Creating a method

    <div id="app" v-cloak>
        <button @click="addCount">Add to count</button>
    </div>

    [...]

    <script>
        
        let app = Vue.createApp({
            data: function() {
                return {
                    count: 0
                }
            },
            methods: {
                addCount() {
                    this.count++;
                    console.log(this.count);
                }
            }
        });

        app.mount("#app");

    </script>

## Keyup event after pressing Enter

    <div id="app">
        <input type="text" @keyup.enter="greet(name)" v-model="name">
    </div>

    [...]

    <script>
        
        let app = Vue.createApp({
            data: function() {
                return {
                    name: "name"
                }
            },
            methods: {
                greet(name) {
                    console.log(`hello ${name}`);
                }
            }
        });

        app.mount("#app");

    </script>

## Right-click event

    <div id="app">
        <button @click.right="rightClick">Right-click event button</button>
    </div>

    [...]

    <script>
        
        let app = Vue.createApp({
            methods: {
                rightClick() {
                    console.log(`right-click`);
                }
            }
        });

        app.mount("#app");

    </script>

## Event modifiers

To prevent a submit event from reloading the page:

    <div id="app">
        <form @submit.prevent="handleSubmit">
            <input input="email">
            <input input="password">
            <button>Log in</button>
        </form>
    </div>

    [...]

    <script>
        
        let app = Vue.createApp({
            methods: {
                handleSubmit() {
                    console.log("submitted");
                }
            }
        });

        app.mount("#app");

    </script>

## Components

You can create a new component within your main VueJS file.

    <div id="app">
        <component></component>
    </div>

    [...]

    let app = Vue.createApp({
        data: function() {
            return {

            }
        }
    });

    app.component("my-component", {
        template: `
            <div>
                component
            </div>
        `
    });

## Getting data from a form

    <div id="app">
        <form @submit.prevent="handleSubmit">
            <input input="email" v-model="email" >
            <input input="password" v-model="password" >
            <button>Log in</button>
        </form>
    </div>

    [...]

    <script>
        
        let app = Vue.createApp({
            data() {
                return {
                    email: "",
                    password: ""
                }
            },
            methods: {
                handleSubmit() {
                    console.log(this.email, this.password, "submitted");
                }
            }
        });

        app.mount("#app");

    </script>

## Props

    <div id="app">
        <example-props name="test 1"></example-props>
        <example-props name="test 2"></example-props>
    </div>

    [...]

    app.component("example-props", {
        template: `<h3 class="center">{{ message }} {{this.name}}</h3>`,
        data() {
            return {
                message: "Example"
            }
        },
        props: ["name"],
        mounted() {
            console.log(`Example ${this.name} instance was mounted!`);
        }
    });

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

## Looping through an object and rendering the data in it

    <div id="app">
        <food></food>
    </div>

    [...]

    <script>
        let app = Vue.createApp({ });

        app.component("food", {
            // the only difference with a component instead of having the code directly in your HTML is the fact you need to create a template
            template: `
                <div class="grid">
                    <figure v-for="(food, index) in favoriteFoods" v-bind:key="index">
                        <div>
                            <img v-bind:src="food.img" v-bind:alt="food.img">
                        </div>

                        <a v-bind:href="food.link" :title="food.name" :class="food.name">{{ food.name }}</a>
                        <div>{{ food.dfn }}</div>
                    </figure>
                </div>`,
            data() {
                return {
                    favoriteFoods: [
                        { name: "foie gras", dfn: "a pâté made from goose liver (marinated in cognac) and truffles", link: "https://en.wikipedia.org/wiki/Foie_gras", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Foie_gras_en_cocotte.jpg/250px-Foie_gras_en_cocotte.jpg" },
                        { name: "coq au vin", dfn: "chicken and onions and champignons braised in red wine and seasonings", link: "https://en.wikipedia.org/wiki/Coq_au_vin", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Gourmet_coq_au_vin.jpg/250px-Gourmet_coq_au_vin.jpg" },
                        { name: "boeuf bourguignon", dfn: "a beef stew braised in red wine", link: "https://en.wikipedia.org/wiki/Beef_bourguignon", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/Julia_Child%27s_Boeuf_Bourguignon.jpg/220px-Julia_Child%27s_Boeuf_Bourguignon.jpg" }
                    ]
                }
            },
            mounted() {
                console.log("Food instance was mounted!");
            }

        });

        app.mount("#app");
    </script>

