## Working with routes in Laravel

### Passing a string to the view without a database

Add this to your web.php file:

    Route::get('/example', function () {
        $string = "This is my super string!";
        return view('test', compact("string"));
    });

The full content of your resources/view/test.blade.php file:

    <header>
        <h1>{{ $string }}</h1>
    </header>