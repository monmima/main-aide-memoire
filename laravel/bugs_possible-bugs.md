# Solving Different Bugs

## When attempting a new migration, you get the message "Dropped all tables successfully." and then the Terminal window hangs

- Your database is probably buggy and the migration cannot be finished. The most likely cause for this is having a line similar to this in your migration file:

        $table->message();

- Use this instead:

        $table->string('message');

## 500 | Server Error showing up instead of app

- Are you sure you have a .env file in your project? By default, it is excluded in the .gitignore file.

## Not being able to load CSS locally and remotely.

- This is probably caused by the fact that you are using HTTP locally and HTTPS remotely.
- The quick and dirty way of solving this is to load your assets twice:

        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
        <link rel="stylesheet" href="{{secure_asset('css/style.css')}}" />

- The asset() function is for local HTTP stuff and the secure_asset is for remote HTTPS stuff.

## Error Class 'App\Http\Controllers\Karaoke' not found

- Add this at the beginning of your controller file:

        use App\Models\Karaoke;


- If you're dealing with a many-to-many relationship, you might not have created your migration, controller and model at the same time, which is better. Just make sure your model has the right name. For instance this:

        return $this->belongsToMany(Category::class);

- Instead of this:

        return $this->belongsToMany(SongCategory::class);

## Unable to see categories/many-to-many relationships in JSON.

Make sure you have this in your controller file:

    "song" => $song->load('categories');

or this in your model:

    $with = ['categories']

## Unable to load CSS on Heroku (in production)

This is likely caused by CSS being loaded with HTTP instead of HTTPS when the rest of the app is loaded with HTTPS.

Change this:

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

To this:

    <link rel="stylesheet" href="css/style.css" />

This might not be the cleanest solution, but at least it works.

## could not find driver (SQL: PRAGMA foreign_keys = ON;)

This has to do with the SQLite database. Make sure you added this line to the require block composer.json file:

        "ext-pdo_sqlite": "*"

Then run:

        composer update

## 500 - Server Error

- Your project is probably missing the .env file. For security reasons, the .env file is not typically uploaded to Git repositories.

## Target class [PizzaController] does not exist.

Make sure you are using the right namespace. The namespace is not working the same way in older versions of Laravel. Please keep in mind that the string "Controller" should come right before the @ sign.

Go to your web.php file and change this:

        Route::get('/pizzas', 'PizzaController@index');

To this:

        Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index');

## Getting a token in the address bar instead of storing/updating the database

- Something is likely to be wrong with your form. This could be caused by:

    - The "method" attribute that your forgot for the &lt;form&gt; tag
    - Nesting a &lt;form&gt; tag inside of another form tag, etc.

## The PUT method is not supported for this route. Supported methods: GET, HEAD.

- Something is wrong with your route. The form route and the web.php route doesn't seem to be the same.

## SQLSTATE[23000]: Integrity constraint violation: 19 NOT NULL constraint failed: songs.name (SQL: update "songs" set "name" = ?, "artist" = ?, "lyrics" = ?, "link" = ?, "updated_at" = 2021-06-28 19:59:50 where "id" = 1)

- Something is wrong with the "name" and "id" attributes of your input fields. Are you sure they exist and they are named properly?
- Another possibility is that you're leaving a field empty and submitting the form when the database expects a non-null value. To solve this, to to your migrate file.

- And change this:

       $table->string('lyrics');

- To this:

       $table->string('lyrics')->nullable();