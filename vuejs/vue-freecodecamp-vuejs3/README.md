# VueJS Aide-Mémoire

Part of this aide-mémoire is inspired by content by [Dan Vega](https://www.udemy.com/course/vue-intro) and [Gwendolyn Faraday](https://www.youtube.com/watch?v=FXpIoQ_rT_c).

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
        <ul>
            <li v-for="friend in friends" v-bind:key="friend.username">
                {{ friend.name }} | {{ friend.username }}
            </li>
        </ul>
    </div>
    
    <script>
        let app = Vue.createApp({
            data() {
                return {
                    friends: [
                        {name: 'Evan You', username: 'youyuxi'},
                        {name: 'Guillaume Chau', username: 'Akryum'},
                        {name: 'Sarah Drasner', username: 'sarah_edo'},
                        {name: 'Greg Pollack', username: 'greggpollack'},
                    ]
                }
            }
        });

        app.mount("#app");
    </script>

## v-for

This code sample writes numbers from 1 to 10 in a bullet list.

    <div id="app">
        <ul>
            <li v-for="num in 10">{{ num }}</li>
        </ul>
    </div>

## v-bind

Syntax:
- One way-binding, as opposed to view-model.
- **v-bind:** or **:**

## Life-cycle methods

    <div id="app">
        Showing how the lifecycle methods work.
    </div>
    
    <script>
        let app = Vue.createApp({
            data() {

            },
            methods() {

            },
            created: function() {
                console.log("created");
            },
            mounted: function() {
                console.log("mounted");
            },
            updated: function() {
                console.log("updated");
            }
        });

        app.mount("#app");
    </script>

## Working with an API

    <div id="app">
        <li v-for="item in response" >
            {{ item.title }}
        </li>
    </div>
    
    <script>
        let app = Vue.createApp({
            data() {
                return {
                    response: null
                }
            },
            mounted: function() {

                fetch('https://jsonplaceholder.typicode.com/posts')
                    .then(res => res.json())
                    .then(data => this.response = data) // pass the data to the response variable
                    .then(console.log("test"))
                    .then(console.log("other test"))
                    .then(data => console.log(data)) // print to the console
                .catch(function (err) {
                    console.log('ERROR CATCHED - ' + err);
                });
            }
        });

        app.mount("#app");
    </script>

## Using vue-router (with VueJS 2)

For now, I just don't quite understand why VueJS 3 won't work with vue-router, so below is what you would do for VueJS 2 and not 3.

    <!DOCTYPE html>
    <html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vue Router</title>
    </head>
    <body>
        <div id="app">
            <h1>{{ mess }}</h1>

            <!-- i links -->
            <router-link to="/">Home</router-link>
            <router-link to="/about">About</router-link>
            <router-link to="/portfolio">Portfolio</router-link>
            <router-link to="/contatti">Contatti</router-link>

            <!-- contenitore per il HTML -->
            <router-view></router-view>
        </div>

        <!-- VueJS -->
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

        <!-- vue-router -->
        <script src="https://unpkg.com/vue-router@3.0.2/dist/vue-router.js"></script>

        <script>
            const Home = { template: `<h1>Contenuto Home</h1>` };
            const About = { template: `<h1>Contenuto About</h1>` };
            const Portfolio = { template: `<h1>Contenuto Portfolio</h1>` };
            const Contatti = { template: `<h1>Contenuto Contatti</h1>` };

            const routes = [
                { path: "/", component: Home },
                { path: "/about", component: About },
                { path: "/portfolio", component: Portfolio },
                { path: "/contatti", component: Contatti }
            ];

            const router = new VueRouter({
                routes // short for `routes: routes`
            });

            const vm = new Vue ({
                router,
                el: "#app",
                data: {
                    mess: "Ciao Mondo"
                }
            }).$mount("#app");
        </script>
    </body>
    </html>