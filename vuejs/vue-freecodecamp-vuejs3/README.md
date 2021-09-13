

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

## String Injection

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
                    this.visible = !this.visible;
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

