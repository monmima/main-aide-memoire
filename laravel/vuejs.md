# Installing VueJS 3 in a Laravel project

The content of this file is based on "[How to install vue 3 in laravel 8 from scratch - Laravel vuejs tutorial | Vue 3 | Laravel 8](https://www.youtube.com/watch?v=_-58QQci57o)" by 
Naran Code.

## Step by step directions

1. Create your project

        composer create-project laravel/laravel laravel-vue-test

1. Install your dependencies

        npm i

1. Install VueJS and Vue Loader

        npm i --save vue@next && npm i --save-dev vue-loader@next

1. Go to webpack.mix.js in the root folder
1. Change this

        mix.js('resources/js/app.js', 'public/js')
            .postCss('resources/css/app.css', 'public/css', [
                //
            ]);

1. To this

        mix.js('resources/js/app.js', 'public/js')
            .vue()
            .postCss('resources/css/app.css', 'public/css', [
                //
            ]);

1. Go to /resources/js/
1. Create a folder named /resources/js/components/
1. Create a component named /resources/js/components/Home.vue
1. Add this to it

        <template>
            <h1>test</h1>
        </template>

1. Go to /resources/js/app.js
1. Paste this in it

        require('./bootstrap');

        import { createApp } from "vue";

        import Home from "./components/Home.vue";

        const app = createApp({});

        app.component("home", Home);

        app.mount("#app");

1. Go to /resources/views/welcome.blade.php
Paste this in it

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
                <Home />
            </div>

            <script src="{{ asset('js/app.js') }}"></script>
        </body>
        </html>

1. Type this command

        npm run watch

1. Press CTRL + C to exit the watch mode
Run this command

        php artisan serve

1. Maybe this other command will do the trick too:

        npm run watch

## Possible bugs

### NodeJS

If at any point you run into an error because, your version of NodeJS is not the latest one.

1. If needs be, use the following commands to update NodeJS:

        sudo apt-get remove nodejs
        sudo apt-get update
        sudo apt-get install nodejs

1. Now you must make sure the error is solved
1. close the Terminal window
1. Open a new Terminal window
1. Type this command

    node --version