# Using Inertia.js

https://www.youtube.com/watch?v=JZDmBWRPWlw
https://www.youtube.com/watch?v=XEW2d2XHkAk

## Perks of Inertia.js

- One codebase and therefore one repository on Github
- No API to create

## Steps to follow

- Open a Terminal window:

laravel new [inertia-app]

- Open app in VS Code.
- Go to .env.
- Delete all lines starting with "DB_".
- Replace with DB_CONNECTION=sqlite.
- Go to /database.
- Create a database.sqlite file.
- Open a Terminal window:

    php artisan migrate

## [Server-side setup](https://inertiajs.com/server-side-setup)

- Open a Terminal window.

    composer require inertiajs/inertia-laravel

- Create a new /app/resources/views/app.blade.php file next to the existing welcome.blade.php file.
- Go to https://inertiajs.com/server-side-setup.
- Copy the the root template for Laravel.
- Go back to https://inertiajs.com/server-side-setup.
- Install the Inertia middleware with this command:

    php artisan inertia:middleware

- Go to /app/Http/Kernel.php.
- At the bottom of the web array, add this line:

    \App\Http\Middleware\HandleInertiaRequests::class,

## [Client-side setup](https://inertiajs.com/client-side-setup)

- Open a Terminal window.

    npm install @inertiajs/inertia @inertiajs/inertia-vue3

- Go to https://inertiajs.com/client-side-setup.
- Copy the code under Initialize app.
- Go to app/resources/js/app.js.
- Replace the content of the file with what you have just copied.
- Delete app/resources/js/bootstrap.js.
- Install the progress indicator:

    npm install @inertiajs/progress

- Copy the code to initialize your app:

    import { InertiaProgress } from '@inertiajs/progress'

    InertiaProgress.init()

- Paste it at the beginning of app/resources/js/app.js after the other import statements.

## Using a CDN file (not ideal, but works)

- Go to app/resources/js/app.js.
- Copy this after the other link tag:
    
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

## Setting up routes

- Go to /routes/web.php
- Copy and paste this:

    Route::get("/hello", function () {
        return inertia("Hello");
    });

- Go to /resources/js.
- Create a new folder called /resources/js/Pages.
- Within the new folder, create a file called Hello.vue.
- Go to webpack.mix.js.
- Replace the code near the end of the file with this:

        mix.js('resources/js/app.js', 'public/js')
            .vue()
            .postCss('resources/css/app.css', 'public/css', [
                //
            ])
            .browserSync("inertia.test");

- Watch out! "inertia.test" might need to be replaced by [your-project-name.test].
- Go to the Terminal window.

    npm i / npm install
    npm i vue / npm install vue
    npm run watch

Run this command again:

    npm run watch
