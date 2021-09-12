# Using Inertia.js, Jetstream and Laravel

It's much more simple to use both Jetstream and Inertia because you can install Inertia with Jetstream and a large part of the configuration will be taken care of for you.

https://www.youtube.com/watch?v=JZDmBWRPWlw
https://www.youtube.com/watch?v=XEW2d2XHkAk
https://github.com/infodp/crud_laravel8_inertia

## Perks of Inertia.js

- One codebase and therefore one repository on Github
- No API to create

## Downsides of Inertia.js

- Code is generated on the client side, so it's not so good for SEO

## Should you create one or two repositories for a VueJS + Laravel project?

It all depends on what you want to achieve. If you want different apps to access the same program, it's better to have distinct repositories (for instance, you could have a mobile app and a desktop app that both need to access the same API).

## Creating a new project with Jetstream

- Open a Terminal window:

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

- Go to /database/.
- Create a database called database.sqlite.

- Migrate your database:

		php artisan migrate

## Importing Inertia into your controller

- Go to app/Http/Controllers/[YourController.php].
- Add this after the other import statements:

    use Inertia\Inertia;
    use Illuminate\Support\Facade\Redirect;

# Importing your controller into web.php and using it

- Go to /routes/web.php.
- Add this import statement:

    use App\Http\Controllers\ProductoController;

- Add this at the very end of the file:

    Route::resource('productos', ProductoController::class)
        ->middleware(['auth:sanctum', 'verified']);

## Setting up routes

- Use this command to have your code compile as you change it:

    npm run watch

- Go to app/Http/Controllers/[YourController.php].
- Copy and paste this code:

    <?php

    namespace App\Http\Controllers;

    use App\Models\Producto;
    use Illuminate\Http\Request;
    use Inertia\Inertia;
    use Illuminate\Support\Facades\Redirect;

    class ProductoController extends Controller
    {
        /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
            $productos = Producto::all();
            return  Inertia::render('Mostrar', ['productos'=>$productos]);
        }

        /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function create()
        {
            return Inertia::render('FormCrear');
        }

        /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
        public function store(Request $request)
        {
            $request->validate([
                'descripcion' => 'required',
                'precio' => 'required'
            ]);
            
            Producto::create($request->all());
            return Redirect::route('productos.index');
        }

        /**
        * Display the specified resource.
        *
        * @param  \App\Models\Producto  $producto
        * @return \Illuminate\Http\Response
        */
        public function show(Producto $producto)
        {
            //
        }

        /**
        * Show the form for editing the specified resource.
        *
        * @param  \App\Models\Producto  $producto
        * @return \Illuminate\Http\Response
        */
        public function edit(Producto $producto)
        {
            return Inertia::render('FormEditar', ['producto' => $producto]);
        }

        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\Models\Producto  $producto
        * @return \Illuminate\Http\Response
        */
        public function update(Request $request, Producto $producto)
        {
            $producto->update($request->all());
            return Redirect::route('productos.index');
        }

        /**
        * Remove the specified resource from storage.
        *
        * @param  \App\Models\Producto  $producto
        * @return \Illuminate\Http\Response
        */
        public function destroy(Producto $producto)
        {
            $producto->delete();
            return Redirect::route('productos.index');
        }
    }

## Creating the views

- Go to /resources/js/Pages/Layouts/AppLayOut.vue.
- Duplicate lines 20 to 22 just under line 22.
- Change "Dashboard" to "Productos".
- Change the two attributes to "productos.index" where there is "dashboard".
- Go to /resources/js/Pages/Layouts and create these views:
    - Mostrar.vue
    - FormCrear.vue
    - FormEditar.vue
- Add this to Mostrar.vue:

        <template>
            <app-layout>
                <h1>test</h1>
            </app-layout>
        </template>

        <script>
            export default ({

            })
        </script>

- Now if you create an account to the site and go to the Productos page, you should see a page with the content above.


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
