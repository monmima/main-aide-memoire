# vuejs-aide-memoire

Part of this aide-mémoire is inspired by content by [Dan Vega](https://www.udemy.com/course/vue-intro) and [Gwendolyn Faraday](https://www.youtube.com/watch?v=FXpIoQ_rT_c).

## Installing VueJS CLI

Run this command to install Vue CLI:

    sudo npm -g i @vue/cli

## Creating a VueJS project with the CLI

Run this command to create the project folder:

    vue create project-name

Or run this command to create the project in the current directory:

    vue create .

Select **Default (Vue 3)** and press Enter.

Run this command to run the project:

    npm run serve

## Installing and using BootStrap 5 in your project (optional)

    npm install --save bootstrap

- Go to main.js.
- Go to /src/main.js.
- Paste this line after all the other imports:

    import "bootstrap/dist/css/bootstrap.min.css";

## Installing vue-router in your project (optional)

Via NPM:

    npm i vue-router@next

Via Vue CLI

    vue add router

## Installing SASS in your project (optional)

    npm install -D sass-loader@^10 sass

## Using SASS in your project

Add this to a VueJS component:

    <style lang="scss">
        :root {
            --primary: #D81E5B;
            --secondary: #8a4fff;
            --tertiary: #32cbff;
            --dark: #131a26;
            --grey: #848484;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Fire Sans", sans-serif;
        }
    </style>

### Installing the Heroku CLI

1. Install snap ([documentation available on snapcraft](https://snapcraft.io/docs/installing-snap-on-linux-mint))

        sudo rm /etc/apt/preferences.d/nosnap.pref
        sudo apt update
        sudo apt install snapd

2. Install Heroku

        snap install --classic heroku

### Preparing your project for a deployment on Heroku

https://dev.to/anjolaogunmefun/deploy-vue-js-projects-to-heroku-1hb5

1. Go to the Terminal window and type this:

        npm install express serve-static

1. Generate a dist folder:

        npm run build

1. Create a server.js file in the root folder of your project.
1. Add [the code below](https://stackoverflow.com/questions/69321620/vuejs-3-project-cannot-get-message-with-all-paths-but-root) to server.js (because [Anjolaoluwa Ogunmefun's code](https://dev.to/anjolaogunmefun/deploy-vue-js-projects-to-heroku-1hb5) would of create a **Cannot Get / 404** bug on all non-root pages):

    const express = require('express');
    const serveStatic = require("serve-static")
    const path = require('path');
    app = express();
    app.use(serveStatic(path.join(__dirname, 'dist')));
    app.get(/.*/, function (req, res) {
        res.sendFile(__dirname + "/dist/index.html");
    });

const port = process.env.PORT || 3000;
app.listen(port);

1. Go to your package.json file and add this:

        ,
        "postinstall": "npm run build",
        "start": "node server.js"

### Creating a Heroku Project

1. Create a GitHub repository if you don't have one already.

1. Go to https://dashboard.heroku.com/apps.
1. Create a new project named this way: [my-web-app-name].
1. Go to the Terminal Window and make sure the app/project is initialized as a Git repository by typing:

        git status

1. On the Heroku web site, you can find more information about the name of your project under the **deploy** tab.
1. Set a Git remote:

        heroku git:remote -a [my-web-app-name]

1. Push your project to Heroku:

        git push heroku HEAD:master

1. On the Heroku's web site, click on **Open app**, which should be located somewhere in the top right corner of the page of your project

### Updating Your Project

Now all you have to do is to update your remote project and type:
    
    git push heroku HEAD:master

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

## String Injection (binding a string with v-bind)

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

## Two-way data binding (v-model)

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
        <li v-for="item in response" v-bind:key="item.title">
            {{ item.title }}
        </li>
    </div>

    [...]
    
    <script>
      export default ({
          data() {
              return {
                  response: null
              }
          },
          mounted: function() {

              fetch('https://pokeapi.co/api/v2/pokemon?limit=20&offset=0')
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
    </script>

## Using vue-router

### VueJS 2

User mdobydullah has created a [nice-looking, compact, CDN-only project](https://github.com/mdobydullah/vue.js-routing-using-cdn) on Github, thus allowing you to try out stuff without having to bother with a full-blown VueJS installation.

### VueJS 3

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <script src="https://unpkg.com/vue@next"></script>
        <script src="https://unpkg.com/vue-router@4"></script>

        <div id="app">
            <h1>{{ mess }}</h1>

            <!-- i links -->
            <ul>
                <li><router-link to="/">Home</router-link></li>
                <li><router-link to="/about">About</router-link></li>
            </ul>

            <!-- contenitore per il HTML -->
            <router-view></router-view>
        </div>
        
        <script>

        const app = Vue.createApp({
            data() {
                return {
                    mess: "ciao mondo"
                }
            }
        });

        const Home = { template: `<h1>Contenuto Home</h1>` };
        const About = { template: `<h1>Contenuto About</h1>` };

        const routes = [
            { path: "/", component: Home },
            { path: "/about", component: About }
        ];

        const router = VueRouter.createRouter({
            history: VueRouter.createWebHashHistory(),
            routes

        })
        app.use(router)
        app.mount('#app')
            
        </script>

    </body>
    </html>

## Using the <code>slot</code> tag for default content

Please keep in mind that the <code>slot</code> tag is now deprecated. Ideally, you should use the v-slot directive instead.

    <div id="app">
        <buttbutt></buttbutt>
        <buttbutt>Custom</buttbutt>
    </div>
    
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        
        let app = Vue.createApp({

        });

        app.component("buttbutt", {
            template: `
                <button>
                    <slot>Default</slot>
                </button>
            `
        });

        app.mount("#app");

    </script>

## V-text

The v-text directive is just an alternative to the mustache syntax. Therefore, it is not necessary to use it if you already feel comfortable with mustache (brackets).

    <div id="app">
        <p v-text="myString"></p>
        <p>{{ myString }}</p>
    </div>
    
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        
        let app = Vue.createApp({
            data: function() {
                return {
                    myString: "my-string"
                }
            }
        });

        app.mount("#app");

    </script>

## V-html

As opposed to <code>v-text</code> and <code>{{ mustache }}</code>, <code>v-html</code> injects HTML instead of raw text.

    <div id="app">
        <p>{{ myString }}</p>
        <p v-html="myString"></p>
    </div>
    
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        
        let app = Vue.createApp({
            data: function() {
                return {
                    myString: "<h1>my-string</h1>"
                }
            }
        });

        app.mount("#app");

    </script>

## V-once

The v-once directive sets a string as static HTML.

    <div id="app">
        <p v-once>{{ myString }}</p>
        <p>{{ myString }}</p>
        <p><input type="text" v-model="myString"></p>
    </div>
    
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        
        let app = Vue.createApp({
            data: function() {
                return {
                    myString: "string of text"
                }
            }
        });

        app.mount("#app");

    </script>

## Conditionnally changing a class on an input field

    <style>
        .green {
            background-color: lightgreen;
        }
        .red {
            background-color: red;
        }
    </style>

    [...]

    <div id="app">
        <input v-model="myString" :class="[ myString.length < 2 ? 'red' : 'green'  ]">
    </div>
    
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        
        let app = Vue.createApp({
            data: function() {
                return {
                    myString: "string of text"
                }
            }
        });

        app.mount("#app");

    </script>

## Avoiding props drilling in VueJS WITHOUT using Vuex

Source: https://www.youtube.com/watch?v=1oy8dn9xAQE

You can nest a whole bunch of components without having to drill the props. Instead you provide and inject your variables like so.

        let app = Vue.createApp({

        });

        app.component("component-x", {
            template: `
                <div>component x: {{ name }}</div> 
                <component-y></component-y>
            `,
            data() {
                return {
                    name: "J. Armitage"
                }
            },
            provide() {
                return {
                    username: this.name
                }

            }
        });

        app.component("component-y", {
            template: `
                <component-z></component-z>
            `
        });

        app.component("component-z", {
            template: `
                <div>component z: {{ username }}</div>
            `,
            inject: ["username"]
        });

        app.mount("#app");

    </script>

## Passing an ID to the view

1. Install view-router if it's not included in your project already.
1. Go to src/router/index.js.
1. Create a route such as:

        path: '/about/:id'

1. Go to your view.
1. Make your view return something like this:

        export default ({
            data() {
                return {
                    id: 0
                }
            },
            mounted() {
                this.id = this.$route.params.id;
            }
        });

1. Use the curly brackets in your template to make it return the id:

        <template>
            <div class="about">
                <h1>This is an about page {{ id }}</h1>
            </div>
        </template>

1. Remember that you have to use the new path (/:id) to view something in your browser.

## Another way of passing data to the view

        <template>
            <div class="about">
                <h1>This is an about page {{ this.$route.params.id }}</h1>
            </div>
        </template>

## Creating Dynamic Routes

        <ul v-if="response.length > 0">
            <li v-for="(item, index) in response" v-bind:key="item.title">
                <router-link :to="`/about/${index + 1}`" :title="item.name">{{ item.name }}</router-link>
            </li>
        </ul>

## Changing a favicon

To change a favicon, all you have to do is find the default VueJS default favicon and replace it with a new one. The default favicon is located in two folders:

- dist/
- public/

## Adding a component to a project with import and export

A default HelloWorld component already exists in the project created with Vue CLI.

1. Go to components/.
1. Create a component like this:

        <template>
            <hr>
            <small>September 2021</small>
        </template>

        <script>
            export default {
            name: 'Footer'
            }
        </script>

1. Go to src/App.vue.
1. Import and export the new component like this:

        <script>
            import Footer from './components/Footer.vue'

            export default {
                name: 'App',
                components: {
                    Footer
                }
            }
        </script>

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

