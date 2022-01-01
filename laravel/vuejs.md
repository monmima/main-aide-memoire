# Working with VueJS 3 in a Laravel project

## Step-by-step directions to install VueJS in a Laravel project

The content of this section is based on "[How to install vue 3 in laravel 8 from scratch - Laravel vuejs tutorial | Vue 3 | Laravel 8](https://www.youtube.com/watch?v=_-58QQci57o)" by 
Naran Code.

1. Create your project

        composer create-project laravel/laravel [name-of-your-project-folder]

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

1. Go to **/resources/js/app.js**.
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

___

## Creating a simple VueJS and Laravel to-do list

The content of this section is based on Scrypster's [Todo List App with Laravel and Vue.js](https://www.youtube.com/watch?v=UHSipe7pSac).

### Running this app

To run this app, you need to use these two commands in two different Terminal windows:

	npm run hot
	php artisan serve

### Steps to follow

1. Create a barebone project using this command:

        laravel new todolist

1. Prepare a database if you don't have one yet. The **database.md** part of this tutorial will provide you with more details about this step. You will also have to change your [root folder]/.env file.
1. Create your controller, migration and model using the following command. The --resource flag prepares the methods inside of your controller.

		php artisan make:model Item -mc --resource

1. Go to  app/database/migrations/[new-migration-file].
1. The up() method should look like this:

        public function up()
        {
			Schema::create('items', function (Blueprint $table) {
                $table->id();
                $table->string("name");
                $table->boolean("completed")->default(false);
                $table->timestamp("completed_at")->nullable();
                $table->timestamps();
			});
        }

1. Run your migration with this command. The :fresh forces a new migration if one was already done.

        php artisan migrate:fresh

1. Go to your new controller file to make sure it was created.
1. Now that your controller was created, go to your routes/api.php file.
1. Add this to your API routes (routes/api.php):

        use App\Http\Controllers\ItemController;

1. Append this to the file (at the end):

        Route::get("/items", [ItemController::class, "index"]);
        Route::prefix("/item")->group( function() {
			Route::post("/store", [ItemController::class, "store"]);
			Route::put("/{id}", [ItemController::class, "update"]);
			Route::delete("/{id}", [ItemController::class, "destroy"]);
        });

1. Go to /app/Http/Controllers/ItemController.php.
1. Make sure the following import is present in the file. Depending on how you create your controller (at the same time as your migration and model or not), it might or might not be present in the file.

        use App\Models\Item;

1. Completing your index() and store() methods.
	1. Update the controller so the index method looks like this:

			public function index()
			{
				return Item::OrderBy("created_at", "DESC")->get();
			}

	1. Update the controller so the store function looks like this:

			public function store(Request $request)
			{
				$newItem = new Item;
				$newItem->name = $request->item["name"];
				$newItem->save();

				return $newItem;
			}

	1. Open up Postman. Another folder in this aide-mémoire has information about how to use and install Postman.
	1. Check the route for /api/items and perform a GET request. This should return a JSON array (or an empty JSON array since it has not been populated so far).
	1. Type the route in Postman address bar route [root]/api/item/store.
	1. Add a "Content-Type" and "application/json" header to the request.
	1. Go to the body tab in Postman and then select the **raw** option.
	1. Pass this request:

			{
				"item": {
					"name": "Take out the trash"
				}
			}

	1. Go to the app/Http/Controllers/ItemController.php file.
	1. Add this import statement at the beginning of the file:

			use Illuminate\Support\Carbon;

1. Completing your update() method.
    1. Find the update() method.
    1. Add these lines to the function (please bear in mind that the way the function below is declared is sligthly different from the way the --resource flag creates your function):

			public function update(Request $request, $id)
			{
				// using find() instead of findOrFail() allows you to specify what you want to happen if the item isn't found
				$existingItem = Item::find( $id );

				if ( $existingItem ) {
				// if true, set to true
				// otherwise, set to false
				$existingItem->completed = $request->item["completed"] ? true : false;

				// if true, set to Carbon::now() (current time)
				// otherwise, set to null
				$existingItem->completed_at = $request->item["completed"] ? Carbon::now() : null;

				$existingItem->save();
				
				return $existingItem;
				}

				// if item is not found
				return "Item not found.";
			}

	1. Go to Postman.
	1. Select the option "Put" for the query type.
	1. Input the following URL for your query (assuming you have a record with id 1):

        	http://127.0.0.1:8000/api/item/1
        

	1. Add a "Content-Type" and "application/json" header to the request.
	1. Go to the body tab in Postman and then select the **raw** option.
	1. Pass this request:

			{
				"item": {
					"completed": true
				}
			}

	1. Now try the same, but with a non-existent id and you should get this output instead:

			Item not found.

1. Completing your delete() method.
    1. Replace your current delete method with the following:

			public function destroy($id)
			{
				// using find() instead of findOrFail() allows you to specify what you want to happen if the item isn't found
				$existingItem = Item::find( $id );

				if ( $existingItem ) {
				$existingItem->delete();
				return "Item successfully deleted.";
				}

				return "Item not found.";
			}

	1. Go to Postman.
	1. Select the option "Delete" for the query type.
	1. Input the following URL for your query (assuming you have a record with id 1):

        	http://127.0.0.1:8000/api/item/1

	1. Your item should not be deleted from the database and should get this message:

			Item successfully deleted.
        
	1. Make sure you get the correct message for a query for a not existing id:

			Item not found.

	1. You should also make sure that this query works fine with a GET request (the deleted records should be gone now):

			http://127.0.0.1:8000/api/items

1. Working with Vue

	1. Go to your Terminal window.
	1. Install your NPM dependencies:

			npm i

	1. Install VueJS:

			npm i vue

	1. Go back to VS Code.
	1. Go to resources/js/.
	1. Create a new folder called **vue/**. This is where you are going to store all of your Vue files.
	1. Create a new file called **resources/js/vue/app.vue**. Make sure your follow this directory tree or you are going to receive a **can't resolve** error.
	1. Add the following content to your new file:
	
			<template>
				<div>
					Hello
				</div>
			</template>

			<script>
			export default {

			}
			</script>

	1. Go to **resources/js/app.js**.
	1. The only content this file has for now is this:

			require('./bootstrap');

	1. Append the following to this file:

			import Vue from "vue";

			import App from "./vue/app.vue";

			// create a new Vue instance
			const app = new Vue({
				el: "#app",
				components: { App }
			});

1. Now that you have created a new Vue instance, you want to tell your app to use it.
	1. Go to **resources/js/views/welcome.blade.php**.
	1. Delete all the style-related content.
	1. Delete all the content within the **&lt;body&gt;** tags.
	1. Delete the class on the **&lt;body&gt;** tag.
	1. Add this between the **&lt;body&gt;** tags:

			<div id="app">
				<app></app>
			</div>

			</!-- mix is for recompiling the code every time a change happens in resource/js/app.js and put it in public/js -->
			<script src="{{ mix('js/app.js') }}"></script>

	1. Go to [root]/webpack.mix.js.
	1. Find this code:

			mix.js('resources/js/app.js', 'public/js')
				.postCss('resources/css/app.css', 'public/css', [
					//
				]);

	1. Use this instead:

			mix.js('resources/js/app.js', 'public/js').vue()
				.postCss('resources/css/app.css', 'public/css', [
					//
				]);

	1. To confirm that everything is working fine, open up a Terminal window and type the following. This is gonna do hot reload for you.

			npm run hot

	1. Start a server for you app if it's not already running:

			php artisan serve

	1. Now if you go back to your browser, and reload your app, you should see the message "Hello".

1. More than a simple "hello" message: creating your components
	1. Create a file called **resources/js/vue/addItemVue.vue**.
	1. Paste the following in it:
			
			<template>
				<div>
					Form
				</div>
			</template>

			<script>
			export default {

			}
			</script>

	1. Create a file called **resources/js/vue/listView.vue**.
	1. Paste the following in it:
			
			<template>
				<div>
					List View
				</div>
			</template>

			<script>
			export default {

			}
			</script>

	1. Create a file called **resources/js/vue/listItem.vue**.
	1. Paste the following in it:
			
			<template>
				<div>
					List Item
				</div>
			</template>

			<script>
			export default {

			}
			</script>

	1. Go to **resources/js/vue/app.vue**.
	1. If you still haven't installed an extension like Laravel Extension Pack by Winnie Lin, maybe you should now. This extension helps you autocomplete the names of folders and file. First time I tried, the code below didn't seem to work so I had to rewrite manually the path of imported files (import statements).
	1. Change the file so it looks like this and loads all of your new components:

			<template>
				<div class="todo-list-container">
					<div class="heading">
						<h2 id="title">Todo List</h2>
						<add-item-form />
					</div>

					<list-view />
				</div>

			</template>

			<script>
			import addItemForm from "./addItemVue.vue";
			import listView from "./listView.vue";

			export default {
				components: {
					addItemForm,
					listView
				}
			}
			</script>

			<style scoped>
				#title {
					text-align: center;
				}

				.heading {
					background: #e6e6e6;
					padding: 10px;
				}

				.todo-list-container {
					margin: auto;
					width: 350px;
				}
			</style>

	1. Go back to your browser and make sure your modifications are reflected in the app.

1. Adding FontAwesome to your project9
	1. Add FontAwesome to your project. Yup, it's **@fortawesome/** with an **r** and not a **n**. Also, the last line assumes you are using VueJS 2. Otherwise, you just have to replace the **2** with a **3**.

		npm i --save @fortawesome/fontawesome-svg-core
		npm i --save @fortawesome/free-solid-svg-icons
		npm i --save @fortawesome/vue-fontawesome@2

	1. Go to /resources/js/app.js.
	1. Append this code to your file after the other import statements:

			import { library } from '@fortawesome/fontawesome-svg-core';
			import { faPlusSquare, faTrash } from '@fortawesome/free-solid-svg-icons';
			import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

			library.add(faPlusSquare, faTrash)

			Vue.component("font-awesome-icon", FontAwesomeIcon);

1. Completing your form so you can insert new records from the input field instead of using Postman

	1. Go to **resources/js/vue/addItemVue.vue**.
	1. Change the existing code so it looks like this:

			<template>
				<div class="add-item">
					<input type="text" v-model="item.name" />
					<font-awesome-icon
						icon="plus-square"
						@click="addItem()"
						:class="[ item.name ? 'active' : 'inactive', 'plus' ]"
					/>
				</div>
			</template>

			<script>
			export default {
				data: function() {
					return {
						item: {
							name: ""
						}
					}
				},
				methods: {
					addItem() {
						if ( this.item.name === "") {
							return;
						}

						axios.post("api/item/store", {
							item: this.item
						})
						.then(response => {
							// reset input
							if (response.status === 201) {
								this.item.name = ""
							}
						})
						.catch(error => {
							console.log(error);
						})
					}
				}
			}
			</script>

			<style scoped>
				.add-item {
					display: flex;
					align-items: center;
					justify-content: center;
				}

				input {
					background: #f7f7f7;
					border: 0;
					margin-right: 10px;
					outline: none;
					padding: 5px;
					width: 100%;
				}

				.active {
					color: #00ce25;
				}

				.inactive {
					color: #999999;
				}

				.plus {
					font-size: 20px;
				}
			</style>

1. Displaying your records in the front-end

	1. Go to **resources/js/vue/listView.vue**.
	1. Change the content from the file to this:

			<template>
				<div>
					<div v-for="( item, index ) in items" :key="index">
						<list-item
							:item="item"
							class="item"
						/>
					</div>

				</div>
			</template>

			<script>
			import listItem from "./listItem";
			import ListItem from './listItem.vue';

			export default {
				props: ["items"],
				components: {
					listItem,
					ListItem
				}
			}
			</script>

			<style scoped>
				.item {
					background: #e6e6e6;
					margin-top: 5px;
					padding: 5px;
				}
			</style>

1. Go to **resources/js/vue/listItem.vue**.
1. Change the content from the file to this:

		<template>
			<div class="item">
				<input
					type="checkbox"
					@change="updateCheck()"
					v-model="item.completed"
				/>

				<span :class="[item.completed ? 'completed' : '', 'item-text']">{{ item.name }}</span>

				<button @click="removeItem()" class="trashcan">
					<font-awesome-icon icon="trash" />
				</button>
			</div>
		</template>

		<script>
		export default {
			props: ["item"]
		}
		</script>

		<style scoped>
			.completed {
				color: #999999;
				text-decoration: line-through;
			}

			.item {
				display: flex;

				align-items: center;
				justify-content: center;
			}

			.item-text {
				margin-left: 20px;
				width: 100%;
			}

			.trashcan {
				background: #e6e6e6;
				border: none;
				color: #ff0000;
				outline: none;
			}
		</style>

1. Go to **resources/js/vue/app.vue**.
1. Change the content from the file to this:

		<template>
			<div class="todo-list-container">
				<div class="heading">
					<h2 id="title">Todo List</h2>
					<add-item-form />
				</div>

				<list-view :items="items" />
			</div>

		</template>

		<script>
		import addItemForm from "./addItemVue.vue";
		import listView from "./listView.vue";

		export default {
			components: {
				addItemForm,
				listView
			},
			data: function() {
				return {
					items: []
				}
			},
			methods: {
				getList() {
					axios.get("api/items")
					.then( response => {
						this.items = response.data
					})
					.catch( error => {
						console.log(error);
					})
				}
			},
			created() {
				this.getList();
				console.log(this.items);
			}
		}
		</script>

		<style scoped>
			#title {
				text-align: center;
			}

			.heading {
				background: #e6e6e6;
				padding: 10px;
			}

			.todo-list-container {
				margin: auto;
				width: 350px;
			}
		</style>

1. Creating the updateCheck() and trashcan() functions
	1. Go to **resources/js/vue/listItem.vue**.
	1. Change the export section so that it looks like this:

			props: ["item"],
			methods: {
				updateCheck() {
					axios.put("api/item/" + this.item.id, {
						// getting the whole item
						item: this.item
					})
					.then(response => {
						if (response.status === 200) {
							// telling the parent component that this item has changed
							this.$emit("itemchanged")
						}
					})
					.catch(error => {
						console.log(error);
					})
				}
			}

	1. Go to **resources/js/vue/listView.vue**.
	1. Change the &lt;list-view /&gt; so it looks like this:

            <list-item
                :item="item"
                class="item"
                v-on:itemchanged="$emit('reloadlist')"
            />

	1. Go to **resources/js/vue/app.vue**.
	1. Change the &lt;list-item /&gt; so it looks like this:

			<!-- in a larger application, you would use state to do this -->
			<list-view
				:items="items"
				v-on:reloadlist="getList()"
			/>

