# A simple emit example

These steps assume you have created a new project with a HomeView.vue file and a HelloWorld.vue file.

## Your HelloWorld.vue file

1. Change the background color of your component. This will make it easier to see the difference with the rest of the page:

		<style scoped>
			.hello {
				background: pink;
			}
		</style>

1. Delete most of the content from your template, keeping only this:

		<template>
			<div class="hello">
				<h1>{{ msg }}</h1>
			</div>
		</template>

1. Add a button in your template with a method in it that will fire an event:

		<button @click="handleClick">Click me</button>

1. List your events like so:

		emits: ['myEmit', "myEmit2"],

1. Create a **method** block with a **handleClick** method in it:

		methods: {
			handleClick() {
				this.$emit('myEmit');
				this.$emit('myEmit2');
			}
		}

Your final result for this file:

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

## Your HomeView.vue file

1. Add this CSS code so it's easy to see what is part of **HomeView.vue**:

		<style scoped>
			.home {
				background: lightgreen !important;
			}
		</style>

1. Add this to the instance of your **HelloWorld** component so events can be detected in **HomeView.vue**:

		@myEmit="handleEmit"
		@myEmit2="handleEmit2"

1. Create a **show** variable in your **data** block. This variable will change when an event is emitted.

		data () {
			return {
				show: false
			}
		},

4. Now create two methods two handle your events. One of them will change the content of your **show** variable and both with log a message to the console.

		methods: {
			handleEmit () {
				this.show = true;
				console.log(`Detected myEmit event.`);
			},
			handleEmit2 () {
				console.log(`Detected myEmit2 event.`);
			}
		}

5. Finally, just before the end of the template, add this v-if block, which will be visible if your **show** variable is has been toggled by an emit event.

		<div v-if="show">
			show or not
		</div>

Your final result for this file:

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
