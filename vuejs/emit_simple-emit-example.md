# A simple emit example

These steps assume you have created a new project with a HomeView.vue file and a HelloWorld.vue file.

Your HelloWorld.vue file:

	<template>
		<div class="hello">
			<h1>{{ msg }}</h1>

			<button @click="handleClick">Click me</button>
		</div>
	</template>

	<script>
	export default {
		name: 'HelloWorld',
		emits: ['myEmit', "myEmit2"],
		props: {
			msg: String
		},
		methods: {
			handleClick() {
				this.$emit('myEmit');
				this.$emit('myEmit2');
			}
		}
	}
	</script>

	<style scoped>
		.hello {
			background: pink;
		}
	</style>

Your HomeView.vue file:

	<template>
		<div class="home">
			<img alt="Vue logo" src="../assets/logo.png">
			<HelloWorld
				msg="Welcome to Your Vue.js App"
				@myEmit="handleEmit"
				@myEmit2="handleEmit2"
			/>
		</div>

		<div v-if="show">
			show or not
		</div>
	</template>

	<script>
	// @ is an alias to /src
	import HelloWorld from '@/components/HelloWorld.vue'

	export default {
		name: 'HomeView',
		components: {
			HelloWorld
		},
		data () {
			return {
				show: false
			}
		},
		methods: {
			handleEmit () {
				this.show = true;
				console.log(`Detected myEmit event.`);
			},
			handleEmit2 () {
				console.log(`Detected myEmit2 event.`);
			}
		}
	}
	</script>

	<style scoped>
		.home {
			background: lightgreen !important;
		}
	</style>
