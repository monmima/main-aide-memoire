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

___

## Creating a simple VueJS and Laravel to-do list

The content of this section is based on Scrypster's [Todo List App with Laravel and Vue.js](https://www.youtube.com/watch?v=UHSipe7pSac).

1. Create a barebone project using this command:

        laravel new todolist

1. Prepare your database. Use the database.md part of this aide-mémoire if needed.

1. Create your controller, migration and model using the following command. The --resource flag prepares the methods inside of your controller.

        php artisan make:model Item -mc --resource

1. Create a database file if you don't have one yet. The **database.md** part of this tutorial will provide you with more details about this step. You will also have to change your root/.env file.
1. Go to your new migration file.
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

1. Run your migration with this command:

        php artisan migrate

1. Go to your new controller file to make sure it was created.
1. Now that your controller is created, go to your routes/api.php file.
1. At this to your controller imports:

        use App\Http\Controllers\ItemController;

1. Append this to the file (at the end):

        Route::get("/items", [ItemController::class, "index"]);
        Route::get("/items")->group( function() {
                Route::post("/store", [ItemController::class, "store"]);
                Route::put("/{id}", [ItemController::class, "update"]);
                Route::delete("/{id}", [ItemController::class, "destroy"]);
        });

1. Go back to /app/Http/Controllers/ItemController.php.
1. Make sure the following import in present in the file. Depending on how you create your controller (at the same time as your migration and model or not), it might or might not be present in the file.

        use App\Models\Item;

1. Update the controller so the index method looks like this:

        public function index()
        {
                return Item::OrderBy("created_at", "DESC")->get();
        }

1. Update the controller so the store function looks like this:

        public function store(Request $request)
        {
                $newItem = new Item;
                $newItem->name = $request->Item["name"];
                $newItem->save();

                return $newItem;
        }

1. Open up Postman. Another folder in this aide-mémoire has information about how to use and install Postman.
1. 