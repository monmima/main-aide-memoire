# Working with routes in Laravel

## Passing a string to the view without a database

Add this to your web.php file:

    Route::get('/example', function () {
        $string = "This is my super string!";
        return view('test', compact("string"));
    });

The full content of your resources/view/test.blade.php file:

    <header>
        <h1>{{ $string }}</h1>
    </header>

## Returning a string instead of a page in Laravel

This assumes that you have created a model and a controller using this command:

    php artisan make:model TestModel -mc

TestModelController.php:

    class TestModelController extends Controller
    {
        public function index()
        {
            return "This is your page.";            
        }
    }

web.php:

    Route::get('/test2', 'App\Http\Controllers\TestModelController@index');

## Returning data from the database as JSON

For this to work, the first thing you need to do is to make sure you have:

1. A database
1. A migration file, which is automatically created with the correct name if you use this command:
    
    php artisan make:model TestModel -mc

1. A database with content in it (or you'll just return empty an empty JSON array)

/database/migrations/2021_12_16_014557_create_model_names_table.php

    $table->id();
    // where you add your code
    $table->timestamps();

Add this to the file above:

    $table->string('name');
    $table->string('age');
    $table->string('grade');

web.php

    Route::get('/testx', 'App\Http\Controllers\TestModelController@index');

/Http/Controllers/TestModelController.php:

    class TestModelController extends Controller
    {
        /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {

            $testModels = TestModel::all();

            return [
                "testModels" => $testModels,
            ];

        }
    }