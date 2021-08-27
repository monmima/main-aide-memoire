# Using Inertia.js and Laravel

https://www.youtube.com/watch?v=JZDmBWRPWlw
https://www.youtube.com/watch?v=XEW2d2XHkAk

## Perks of Inertia.js

- One codebase and therefore one repository on Github
- No API to create

## Downsides of Inertia.js

- Code is generated on the client side, so it's not so good for SEO

## Should you create one or two repositories for a VueJS + Laravel project?

It all depends on what you want to achieve. If you want different apps to access the same program, it's better to have distinct repositories (for instance, you could have a mobile app and a desktop app that both need to access the same API).

## Creating a new project

### Option 1

- Open a Terminal window:

		laravel new [inertia-app]

### Option 2

- Alternately, your can use the following to create an app using JetStream:

		laravel new [inertia-app] --jet

- Which Jetstream stack do you prefer?
	- [0] livewire
  	- [1] inertia

			1

- Will your application use teams? (yes/no) [no]:

		no

## Setting up the database

- Open app in VS Code.
- Go to .env.
- Delete all lines starting with "DB_".
- Replace with DB_CONNECTION=sqlite.
- Go to /database.
- Create a database.sqlite file.
- Open a Terminal window:

		php artisan migrate

- Open a Terminal window:

		php artisan make:model Message -mc --resource

- The --resource flag pre-generates your functions in the controller (create, destroy, etc.).
- Go to /app/Models/Message.php.
- Under "use HasFactory;" add this (to list the attributes **you want** to be fillable):

		protected $fillable = ['text'];

- Alternatively, you could use this (to list the attributes **you don't want** to be fillable):

		protected $guarded = [
			'id',
		];

- Go to  /database/migrations/[messages-table].
- Find "$table->id();".
- Under this line add this:

		$table->string("text")->nullable();

- Create your database:

		php artisan migrate

## [Server-side setup](https://inertiajs.com/server-side-setup)

- Open a Terminal window.

    	composer require inertiajs/inertia-laravel

- Create a new /resources/views/app.blade.php file next to the existing welcome.blade.php file.
- Go to https://inertiajs.com/server-side-setup.
- Copy the the root template for Laravel into /resources/views/app.blade.php.
- Go back to https://inertiajs.com/server-side-setup.
- Install the Inertia middleware with this command:

    php artisan inertia:middleware

- Go to /app/Http/Kernel.php.
- At the bottom of the web array, add this line:

    \App\Http\Middleware\HandleInertiaRequests::class,

## [Client-side setup](https://inertiajs.com/client-side-setup)

- Open a Terminal window.

    npm install @inertiajs/inertia @inertiajs/inertia-vue

- Go to https://inertiajs.com/client-side-setup.
- Copy the code under Initialize app.
- Go to /resources/js/app.js.
- Replace the content of the file with what you have just copied.
- Delete /resources/js/bootstrap.js.
- Install the progress indicator:

    	npm install @inertiajs/progress

- Copy the code to initialize your app:

		import { InertiaProgress } from '@inertiajs/progress'

		InertiaProgress.init()

- Paste it at the beginning of app/resources/js/app.js after the other import statements.

## Using a CDN file like Tailwind CSS (not ideal, but works)

Tailwind is a tool similar to Bootstrap

- Go to /resources/views/app.blade.php.
- Copy this after the other link tag:
    
		<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

## Setting up routes

- Go to /routes/web.php.
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

- Watch out! The string "inertia.test" above might need to be replaced by [your-project-name.test]. Not sure about this one yet.
- Go to the Terminal window.

		npm i / npm install
		npm i vue / npm install vue
		npm run watch

Run this command again:

    npm run watch

Now, your app should run on port 8000, even though the window that is going to launch will be on port 3000 (which will display a blank page loading infinitely).

## Making sure inertia-link is loaded

- Go to /resources/js/Pages/Hello.vue.
- Import inertia-vue like so:

		<script>
			import { Link } from '@inertiajs/inertia-vue';

			export default { components: { Link } };
		</script>

- Create links like so:

		<li><Link href="/hello">Hello page</Link></li>

## Passing data to the view

- Use this syntax in your controller or /routes/web.php file:

		public function index()
		{
			$messages = NewMessage::all();
			return inertia("Hello", ["messages" => $messages]);
		}

- Use this syntax in your view template:

		<div v-for="(message, index) in messages" v-bind:key="index">
			{{ message.message }}
		</div>

- Use this syntax in your view script:

		import { Link } from '@inertiajs/inertia-vue';

		export default {
			components: { Link },
			props: {
				messages: Array
			}
		};

- Make sure your database is not empty so you have something to render.

## Storing data in the database

- Go to your controller in the /app/Http/Controllers folder and add this:

		/**
		* Store a newly created resource in storage.
		*/
		public function store(Request $request)
		{
			NewMessage::create($request->all());

			return redirect("/hello-database");
		}

- Go to /routes/web.php and add something similar to this:

		Route::post('/messages', "App\Http\Controllers\NewMessageController@store");

- Go to /resources/js/Pages/Hello.vue and add this to the template:

		<form @submit.prevent="submit">
			<!-- form.message refers to the name of the column in the database -->
			<textarea v-model="form.message" rows="8"></textarea>
			<button type="submit">Add a message</button>
		</form>

- Still in /resources/js/Pages/Hello.vue, but this time in the script part, add this:

		import { Link } from '@inertiajs/inertia-vue';

		export default {
			components: { Link },
			props: {
				messages: Array
			},
			data() {
				return {
					// refers to the name of the column in the database
					form: { message: "" }
				}
			},
			methods: {
				submit() {
					// send data to the backend
					this.$inertia.post("/messages", this.form);
				}

			}

		};

## Deleting a record

- Go to /routes/web.php.
- Add these lines:

	// this is probably not ideal, but at least it works
	Route::get('/{id}/delete', "App\Http\Controllers\[NameOfMyController]@destroy");

- Go to /app/Http/Controllers/[NameOfMyController].
- Add these lines:

		/**
		* delete one record
		*/
		public function destroy($id)
		{
			//
			$record = NewMessage::findOrFail($id);
			$record->delete();

			return redirect("/hello-database");
		}

- Go to /resources/js/Pages/Hello.vue.
- Add this line:

		<Link title="Delete this record" v-bind:href="`/${ message.id }/delete`">Delete</Link>

## Validating data in the store route

- Go to your controller in the /app/Http/Controllers folder and change the store function so it looks like this:

		/**
		* Store a newly created resource in storage.
		*/
		public function store(Request $request)
		{
			$validated = $request->validate([
				"message" => "required|min:1"
			]);

			NewMessage::create($validated);

			return redirect("/hello-database");
		}

- Go to /resources/js/Pages/Hello.vue and add this:

		<div v-if="errors.message">
			{{ errors.message }}
		</div>

- In the same file, add a line that will return an errors object:

        props: {
            messages: Array,
            errors: Object
        },

## Conditional rendering depending if something was found in the database or not

		<div>

			<!-- if no messages in database -->
			<div v-if="messages.length === 0">
				Nothing do display.
			</div>

			<!-- if no messages in database -->
			<div v-else v-for="(message, index) in messages" v-bind:key="index" class="bg-white p-8 mb-4 rounded shadow">
				{{ message.message }}
			</div>

		</div>

## Possible Bugs

### Clicking on a link won't load a new component

- See if you can render a string instead of a view.
- Make sure the name of your VueJS component is capitalized properly in your controller or web.php file, depending on what you're using.

### After clicking on a link, you get a pop-up with a 404 error instead of your view

- The href attribute for your link doesn't seem to match an existing route. The pop-up with the 404 error is the default behaviour when a route leads to a non-existing page.

### After you created a loop to render the content of the database, nothing shows up in the interface

- Make sure your database is not empty.
