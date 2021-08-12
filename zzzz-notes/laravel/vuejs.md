# Using VueJS with Laravel

## Possible bugs and issues

### You get an error message regarding Node

You might need to update your version of Node.

The information below is based on content found on [phoenixnap.com](https://phoenixnap.com/kb/update-node-js-version).


1. Clear the cache

        npm cache clean -f

1. Install n, Node’s version manager:

        npm install -g n

1. Install the latest release:

        sudo n stable

### You get a blank page in the browser instead of some HTML content.

Are you sure you ran this command?

	npm install && npm run dev

### The changes you made to your app are not taken into accout.

You need to run this command every time you change something:

	npm run dev

You may also run this command once and NPM will update your app as you go:

	npm run watch

___

## How to do it

https://www.youtube.com/watch?v=QmCM17uwTSw&list=PLeeuvNW2FHVhcBTW9XK05nXIoSKV4QfzF

1. Open a Terminal window and copy-paste these lines:

    laravel new [my-app]
    cd [my-app]
	composer require laravel/ui
	php artisan ui vue
	npm install && npm run dev

1. Go to resources/views/welcome.blade.php.
1. Replace the content of the file with this:

		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>Document</title>

			<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
		</head>
		<body>
			<div id="app">
				<example-component></example-component>
			</div>

			<script src="{{ asset('/js/app.js') }}"></script>
		</body>
		</html>


1. At this point, you should be able to see your app by running this command:

		php artisan serve

1. Install vue-router:

		npm install vue-router

1. Go to /resources/js/components/app.js.
1. Find this line:

		import Vue from "vue";

1. Add these lines afterwards. Adapt them to suit your needs:

		import VueRouter from "vue-router";
		Vue.use(VueRouter);

		import Home from "./components/HomeComponent.vue";
		import Task from "./components/TaskComponent.vue";

		const routes = [
			{
				path: '/home',
				component: Home
			},
			{
				path: '/tasks',
				component: Task
			}
		];

		const router = new VueRouter({
			mode: 'history',
			routes: routes
		});

1. Use this to create links:

		<router-link to="/foo">Go to foo</router-link>

1. Use this to display route content in welcome.blade.php:

		<router-view></router-view>

___


