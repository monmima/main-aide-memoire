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