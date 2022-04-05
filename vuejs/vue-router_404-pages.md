# 404 pages

The information in this part of the aide-mémoire is inspired by content from [The Net Ninja's tutorial on vue-router](https://www.youtube.com/watch?v=juocv4AtrHo).

Your NotFound.vue file. You can name this view whatever you want.

	<template>
		Not Found: 404.
	</template>

Your router/index.js file:

	import NotFound from '../views/NotFound.vue'

	[...]

	const routes = [
		{
			path: '/',
			name: 'home',
			component: HomeView
		},
		{
			path: '/:catchAll(.*)',
			name: 'NotFound',
			component: NotFound
		}
	]