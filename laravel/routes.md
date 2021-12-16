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

# Returning a string instead of a page in Laravel

This assumes that you have created a model and a controller using this command:

    php artisan make:model TestModel -mc

TestModelController.php:

    class TestModelController extends Controller
    {
        public function index()
        {
            // $karaokes = Karaoke::all();

            // return view("index", [
            //     "karaokes" => $karaokes
            // ]);

            return "This is your page.";
            
        }
    }

web.php

    Route::get('/test2', 'App\Http\Controllers\TestModelController@index');