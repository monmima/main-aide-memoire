<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// basic route
Route::get('/', function () {
    return view('index');
});

// string
Route::get('/plain-text', function () {
    return "Hello world!";
});

// bug
Route::get('bogue/', function () {
    return view('bogue');
});

// JSON
Route::get('/json', function () {
    return [
        "foo" => "bar",
        "laravel" => "automatically turns arrays into JSON",
        "Firefox" => "gives a nice layout to arrays, but not Brave"
    ];
});

// writing HTML in Blade file
Route::get('/html', function () {
    return view('example-001');
});

// alternate route
Route::get('/html-2', function () {
    return view('example-001');
});

// forward slashes are optional
Route::get('html-3', function () {
    return view('example-001');
});

// passing data through the query string
// http://127.0.0.1:8000/query-string/?name=jack
Route::get('/query-string-plain-text', function () {
    $name = request("name");
    return request('name');
});

// passing query string data to the view
// http://127.0.0.1:8000/query-string/?name=jack
Route::get('/query-string-html', function () {
    $name = request("name");

    return view("example-002", [
        "name" => $name
    ]);
});

// creating a route with a wildcard value/id
// http://127.0.0.1:8000/query-string/?name=jack
Route::get('/route-with-wildcard-value-or-id/{id}', function ($id) {
    return $id;
});

// route with a database-less store
// http://127.0.0.1:8000/query-string/?name=jack
Route::get('/route-with-wildcard-and-view/{post}', function ($post) {
    // creating a pseudo-database/a store
    $posts = [
        "my-first-post" => "Hello, this is my first post!",
        "my-second-post" => "Now I am getting the hang of this blogging thing."
    ];

    //// 1. The bare minimum; doesn't handle non-existing routes

    // return view("route-with-wildcard-and-view", [
    //     "post" => $posts[$post]
    // ]);

    //// 2. Default value if content is not found; Jeffrey Ways wouldn't recommend this

    // return view("route-with-wildcard-and-view", [
    //     "post" => $posts[$post] ?? "This post doesn't seem to exist."
    // ]);

    //// 3. Handling 404 errors and getting the basic Laravel 404 error page
    
    if (! array_key_exists($post, $posts)) {
        abort(404, "Sorry, this page doesn't exist.");
    }

    return view("example-003", [
        "post" => $posts[$post]
    ]);
});

// using a controller for routes in more sizable projects
// There are two ways of doing this
// 1. Manually creating the file in app/Http/Controllers
// 2. php artisan make:controller RecipesController

// Important note: There is a bug with just writing "RecipesController@show", which is what Jeffrey tells you to do in his tutorial. mkellyxp commented that using "App\Http\Controllers\RecipesController@show" solves the issue. I'm not exactly sure about how clean this solution is supposed to be, but it works.

Route::get('/route-with-wildcard-no-view-and-controller/{recipe}', "App\Http\Controllers\ExampleController001@show");

// the same, but with a view this time
Route::get('/route-with-wildcard-view-and-controller/{recipe}', "App\Http\Controllers\ExampleController002@show");

// the same, but with a view and a database
Route::get('/route-with-wildcard-view-controller-and-database/{recipe}', "App\Http\Controllers\ExampleController003@show");

// layout example 6
Route::get('/example-006', function () {
    return view('example-006');
});

// layout example 7
Route::get('/example-007', function () {
    return view('example-007');
});

// layout example 8 - with header
Route::get('/example-008', function () {
    return view('example-008');
});

// layout example 9 - with footer
Route::get('/example-009', function () {
    return view('example-009');
});

// example 10 - passing data to the view; no database
Route::get('/example-010', function () {
    $string = "This is my super string!";
    return view('example-010', compact("string"));
});

// example 11 - passing data to the view with a database and no controller file
Route::get('/example-011', function () {
    // $string = "This is my dynamic string!";
    // return view('example-010', compact("string"));

        $post = \DB::table("posts_tb")->first();
        $everything = \DB::table("posts_tb")->get();

        // if item does not exist in database
        if (! $post) {
            abort(404);
        }

        return view("example-011", [
            // "recipe" => $recipes[$recipe]
            "post" => $post,
            "everything" => $everything
        ]);
});

// ZH Routes

Route::get('/zh', "App\Http\Controllers\ZHcontroller@index");
Route::post('/zh', "App\Http\Controllers\ZHcontroller@store");
Route::get('/zh/create', "App\Http\Controllers\ZHcontroller@create");
Route::get('/zh/{entry}/edit', "App\Http\Controllers\ZHcontroller@edit");
Route::put('/zh/{entry}', "App\Http\Controllers\ZHcontroller@update");

// BG Routes

Route::get('/bg-json', "App\Http\Controllers\BGcontroller@bgJson");
Route::get('/bg-json-pagination', "App\Http\Controllers\BGcontroller@bgJsonPaginate");
Route::get('/bg-html', "App\Http\Controllers\BGcontroller@bgHtml");
Route::get('/bg-html-pagination', "App\Http\Controllers\BGcontroller@bgHtmlPagination");
Route::get('/bg-html/{id}', "App\Http\Controllers\BGcontroller@bgHtmlId");

// CRUD Routes
// watch out; order matters

Route::get('/crud', "App\Http\Controllers\CrudController@index");
Route::post('/crud', "App\Http\Controllers\CrudController@store");
Route::get('/crud/create', "App\Http\Controllers\CrudController@create"); 
Route::get('/crud/{entry}', "App\Http\Controllers\CrudController@show");
Route::get('/crud/{entry}/edit', "App\Http\Controllers\CrudController@edit");
Route::put('/crud/{entry}', "App\Http\Controllers\CrudController@update");
Route::delete('/crud/{entry}/delete', "App\Http\Controllers\CrudController@delete");

// Brad Traversy's Tutorial Routes

Route::get('/brad', "App\Http\Controllers\BradController@index");
Route::get('/brad/part-001', "App\Http\Controllers\BradController@part001");
Route::get('/brad/part-003', "App\Http\Controllers\BradController@part003");
Route::get('/brad/part-004', "App\Http\Controllers\BradController@part004");
Route::get('/brad/part-005', "App\Http\Controllers\BradController@part005");
Route::get('/brad/part-006', "App\Http\Controllers\BradController@part006");
Route::get('/brad/part-007', "App\Http\Controllers\BradController@part007");
Route::get('/brad/part-008', "App\Http\Controllers\BradController@part008");
Route::get('/brad/part-009', "App\Http\Controllers\BradController@part009");
Route::get('/brad/part-010', "App\Http\Controllers\BradController@part010");
Route::get('/brad/part-011', "App\Http\Controllers\BradController@part011");
Route::get('/brad/part-012', "App\Http\Controllers\BradController@part012");
Route::get('/brad/part-013', "App\Http\Controllers\BradController@part013");
Route::get('/brad/part-014', "App\Http\Controllers\BradController@part014");
Route::get('/brad/part-015', "App\Http\Controllers\BradController@part015");
Route::get('/brad/part-016', "App\Http\Controllers\BradController@part016");
Route::get('/brad/part-017', "App\Http\Controllers\BradController@part017");
Route::get('/brad/part-018', "App\Http\Controllers\BradController@part018");
Route::get('/brad/part-019', "App\Http\Controllers\BradController@part019");
Route::get('/brad/part-020', "App\Http\Controllers\BradController@part020");
Route::get('/brad/part-021', "App\Http\Controllers\BradController@part021");
Route::get('/brad/part-022', "App\Http\Controllers\BradController@part022");

// Mike Dane/freeCodeCamp's Tutorial Routes

Route::get('/freecodecamp', "App\Http\Controllers\MikeDaneController@index");
Route::get('/freecodecamp/part-004', "App\Http\Controllers\MikeDaneController@part004");
Route::get('/freecodecamp/part-005', "App\Http\Controllers\MikeDaneController@part005");
Route::get('/freecodecamp/part-006', "App\Http\Controllers\MikeDaneController@part006");
Route::get('/freecodecamp/part-007', "App\Http\Controllers\MikeDaneController@part007");
Route::get('/freecodecamp/part-008', "App\Http\Controllers\MikeDaneController@part008");
Route::get('/freecodecamp/part-009', "App\Http\Controllers\MikeDaneController@part009");
Route::get('/freecodecamp/part-010', "App\Http\Controllers\MikeDaneController@part010");
Route::get('/freecodecamp/part-011', "App\Http\Controllers\MikeDaneController@part011");
Route::get('/freecodecamp/part-012', "App\Http\Controllers\MikeDaneController@part012");
Route::get('/freecodecamp/part-013', "App\Http\Controllers\MikeDaneController@part013");
Route::get('/freecodecamp/part-014', "App\Http\Controllers\MikeDaneController@part014");
Route::get('/freecodecamp/part-015', "App\Http\Controllers\MikeDaneController@part015");
Route::get('/freecodecamp/part-016', "App\Http\Controllers\MikeDaneController@part016");
Route::get('/freecodecamp/part-017', "App\Http\Controllers\MikeDaneController@part017");
Route::get('/freecodecamp/part-018', "App\Http\Controllers\MikeDaneController@part018");
Route::get('/freecodecamp/part-019', "App\Http\Controllers\MikeDaneController@part019");
Route::get('/freecodecamp/part-020', "App\Http\Controllers\MikeDaneController@part020");
Route::get('/freecodecamp/part-021', "App\Http\Controllers\MikeDaneController@part021");
Route::get('/freecodecamp/part-022', "App\Http\Controllers\MikeDaneController@part022");
Route::get('/freecodecamp/part-023', "App\Http\Controllers\MikeDaneController@part023");
Route::get('/freecodecamp/part-024', "App\Http\Controllers\MikeDaneController@part024");
Route::get('/freecodecamp/part-025', "App\Http\Controllers\MikeDaneController@part025");
Route::get('/freecodecamp/part-026', "App\Http\Controllers\MikeDaneController@part026");
Route::get('/freecodecamp/part-027', "App\Http\Controllers\MikeDaneController@part027");
Route::get('/freecodecamp/part-028', "App\Http\Controllers\MikeDaneController@part028");
Route::get('/freecodecamp/part-029', "App\Http\Controllers\MikeDaneController@part029");
Route::get('/freecodecamp/part-030', "App\Http\Controllers\MikeDaneController@part030");
Route::get('/freecodecamp/part-031', "App\Http\Controllers\MikeDaneController@part031");
Route::get('/freecodecamp/part-032', "App\Http\Controllers\MikeDaneController@part032");
Route::get('/freecodecamp/part-033', "App\Http\Controllers\MikeDaneController@part033");


