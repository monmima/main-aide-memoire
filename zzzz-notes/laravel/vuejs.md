# Installing VueJS in Laravel

Thanks to [gitconnected](https://levelup.gitconnected.com/how-to-set-up-and-use-vue-in-your-laravel-8-app-2dd0f174e1f8). gitconnected is the inspiration behind this part of the aide-mémoire on Laravel.

## Creating a new app

    laravel new my-app
    cd my-app

## Adding VueJS to an existing Laravel Project - probably gonna have to delete this

    composer require laravel/ui

    php artisan ui vue

    npm install && npm run dev

If you see an error message, just run npm run dev again.

- Include `/js/app.js` in your view.
- Add the vue root element to your HTML.

        <div id="app">
            <example-component></example-component>
        </div>

___

## Alternate way that seems more complete

https://dev.to/grahammorby/setting-up-vue-in-laravel-8-580m

1. Go to /routes/wep.php.
1. Delete the existing route and replace it with this:

        Route::get('/{any}', 'App\Http\Controllers\PagesController@index')->where('any', '.*');

1. Open a Terminal window and type this command:

        php artisan make:controller PagesController

1. Go to app/Http/Controllers/PagesController.php and add this **between the existing curly braces** to return the welcome view:

        public function index()
        {
                return view('welcome');
        }

1. Go to welcome.blade.php replace all the current content with this:

        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;600&display=swap" rel="stylesheet">
        <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>
        </script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

        <title>{{env('APP_NAME')}}</title>
        </head>
        <body>
        <div id="app">
                <app></app>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
        </body>
        </html>

1. Open a Terminal window and type this:

        npm install
        npm install vue
        npm install vue-template-compiler vue-loader@^15.9.5 --save-dev --legacy-peer-deps

1. Go to to the resources/js.
1. Create a folder called "views".
1. Create a file called app.vue.
1. Copy and paste this into it:

		<template>
			<div>
				{{message}}
			</div>
		</template>
		<script>
				const default_layout = "default";

				export default {
					computed: {},
					data() {
						return {
								message:'Hello World'
						}
					}
				};
		</script>

1. Go one folder above. Open app.js and append this to the file:

		import Vue from 'vue'

		// Main pages
		import App from './views/app.vue'

		const app = new Vue({
			el: '#app',
			components: { App }
		});

1. Go to webpack.mix.js and change the content of the file by adding the string **vue()** like so:

		mix.js('resources/js/app.js', 'public/js').vue()

1. Update webpack.mix.js by running these commands:

		npm run dev
		PHP artisan serve

___

## Updating node (in case your receive error messages regarding Node)

The information below is based on content found on [phoenixnap.com](https://phoenixnap.com/kb/update-node-js-version).


1. Clear the cache

        npm cache clean -f

1. Install n, Node’s version manager:

        npm install -g n

1. Install the latest release:

        sudo n stable
