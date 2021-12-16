# Laravel Aide-Mémoire

___

## A Word of Thanks

I am indebted to many people for being able to create this aide-mémoire. I had to figure out a way to do many different things, including:

- Installing Laravel on Linux Mint
- Using SQLite
- Deploying a Laravel project to Heroku

On top of that, I had to wrap my head around the ways of Laravel, and this was made possible thanks to [Jeffrey Way from Laracast](https://laracasts.com/series/laravel-8-from-scratch). His tutorial is crisp, comes with all the code in a Github repository and is explained is plain terms. And on top of that, it's free.

___

## Installing Laravel on Linux Mint

Thanks to Ceed Media for his [YouTube tutorial](https://www.youtube.com/watch?v=cVecpIbonnU) on how to install Laravel on Linx Mint. The steps he follows are below.

1. Update your system

        sudo apt-get update

2. Install curl

        sudo apt install curl

3. Install PHP

        sudo apt install php

4. Install Composer

        curl -s https://getcomposer.org/installer | php

5. Move the file

        sudo mv composer.phar /usr/local/bin/composer

6. Confirm Composer is installed

        composer

7. Install Laravel

        composer global require laravel/installer

8. Edit .bashrc

        nano .bashrc

9. Under "esac", type:

        export PATH="$PATH:$HOME/.config/composer/vendor/bin"

10. Use CTRL + X to save
11. Press Enter to confirm the name of the file

12. Refresh the file:

        source ~/.bashrc

13. Install Laravel

        laravel (to install laravel)

14. Go to the Desktop folder

        cd Desktop

15. Install php-mbstring

        sudo apt-get install php-mbstring

16. Install php-xml

        sudo apt-get install php-xml

17. Go to the project folder and downloaad the lastest dependencies

        composer update

18. Use CTRL + H in the project folder
19. Rename **.env.example** to **.env** (there might already be a file with this name and therefore this step might be useless)

___

### The Net Ninja Way

The Net Ninja installs Laravel globally in [one of his tutorials](https://www.youtube.com/watch?v=E74_WZpjeKA) with **composer global require laravel/installer**. This means that you can create Laravel projects wherever you want.

___

### Creating a Project and Running it

    laravel new [my-web-app-name]
    php artisan key:generate
    php artisan serve

Now go to your browser and type http://localhost:8000/ in the address bar.

___

## Deleting Your Dependencies To Move A Project Around

All dependencies are stored in your **vendor** and **node_module** subfolders. To reinstall your dependencies, for instance after downloading your project from a git repository, use **composer update** and **npm install**.

___

## Using An Existing Laravel Project On Another Machine

If you have formatted your computer or are using another computer and want to use a pre-existing project, you'll have to go through the following steps:

1. Install NPM:

        sudo apt install npm

2. Install Composer:

        sudo apt install Composer

3. Install the SQLite module for PHP:

        sudo apt-get install php-sqlite3

4. Install whatever this is:

        sudo apt-get install php-xml

5. Install the composer dependencies:

        composer install

6. Install the NPM dependencies:

        npm install

___


## Using And Running MySQL On Linux Mint

Obviously, you can use Microsoft, Linux or the Macintosh operating system to run this project, but I'm keeping these steps below just in case I get stuck again, and I use Linux Mint as my main OS.

1. Download XAMPP for Linux from https://www.apachefriends.org/download.html
2. Run the .run file as a root user
3. To run XAMPP, go to /opt/lampp/ as a root user
4. Go to localhost/dashboard/ or go to localhost/phpmyadmin
5. Double-click on manager-linux-x64.run
6. Create a database and then import the content into it if needs be (you cannot create a database directly from a file you want to import)
7. Go to the .env file and make sure your environment variables look like this:

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=name_of_my_database
        DB_USERNAME=root
        DB_PASSWORD=

8. Go to root folder, open a Terminal window and type:

        php artisan migrate

9. If everything went fine, your database should now have a few tables that were automatically created such as failed_jobs, etc.

Notes:

- Apparently, the path can be a bit different from one Linux distro to the other.
- If your Apache server won't start (red dot next to it in XAMPP), run this command:

        sudo systemctl stop apache2

- If the above really won't work, I suggest restarting your computer, and then running the same command.

___

## Using SQLite locally on Linux Mint

https://www.codementor.io/@goodnesskay/developing-locally-using-sqlite-with-laravel-on-ubuntu-8s8358503

Thanks to [Coder's Tape
](https://www.youtube.com/watch?v=kWmnQvznkUI) for creating his tutorial on YouTube on how to change the default SQL database settings to SQLite.

1. Go to the .env file
2. Replace **DB_CONNECTION=mysql** with **DB_CONNECTION=sqlite**
3. Erase all the other database-related lines (all lines starting with the prefix "DB_") such as DB_HOST=127.0.0.1, DB_PASSWORD=, etc.
4. Create a database through the Terminal or manually

        touch database/database.sqlite

5. Update Composer

        composer update

6. Install possibly missing dependencies

        composer require doctrine/dbal

7. Go to the .env file and make sure your environment variables look like this:

        DB_CONNECTION=sqlite

8. Go to the root folder, open a Terminal window and type:

        php artisan migrate

9. If everything went fine, your database should nonw have a few tables that were automatically created such as failed_jobs, etc.

___

## Heroku

My references here were a [tutorial on YouTube by Jonny Kalambay](https://www.youtube.com/watch?v=MxfxiR8TVNU) and an answer on the [Trailblazer Community](https://trailblazers.salesforce.com/answers?id=9064S000000DHq1QAG).

Also, for the details that pertain to Laravel in particular, [codigofacilito and his tutorial on YouTube](https://www.youtube.com/watch?v=GE2Kmy8WL3g) were very useful to me. By the way his tutorial is in Spanish. He also explains how to upload a PostgreSQL database to the project at the end of his video.

### Installing the CLI

1. Install snap ([documentation available on snapcraft](https://snapcraft.io/docs/installing-snap-on-linux-mint))

        sudo rm /etc/apt/preferences.d/nosnap.pref
        sudo apt update
        sudo apt install snapd

2. Install Heroku

        snap install --classic heroku

### Creating a Heroku Project

1. Go to Heroku
    - https://dashboard.heroku.com/apps
2. Create a new project such as [my-web-app-name]
3. Go to the Terminal Window and make sure the app/project is initialized as a Git repository by typing:

        git status

4. On the Heroku web site, you can find more information about the name of your project under the **deploy** tab.
5. Create a file named **Procfile** (no extension) at the root of your project. It should contain this:
    - web: vendor/bin/heroku-php-apache2 public/
6. Go to the .env file. You'll need to copy and paste a series of lines to the Terminal window.

        heroku git:remote -a [my-web-app-name]

        heroku config:add APP_NAME=Laravel

        heroku config:add APP_ENV=production

        heroku config:add APP_KEY=...

        heroku config:add APP_DEBUG=true

        heroku config:add APP_URL=http://[my-web-app-name].test

7. Push your project to Heroku:

        git push heroku HEAD:master

8. On the Heroku's web site, click on **Open app**, which should be located somewhere in the top right corner of the page of your project
9. Now you should see your /resources/views/app.blade.php should.
11. See below if you want to use SQLite as a database in Heroku.

### Updating Your Project

Now all you have to do is to update your remote project and type:
    
    git push heroku HEAD:master

### Using SQLite in Heroku

Your app might run perfectly locally. Setting it up so it runs remotely as well is slightly more complicated.

The first thing you have to keep in mind if you use a combination of SQLite and Heroku, you will overwrite your remote database with each redeployment, thus resetting it to what you have locally.

For more information on using Heroku and SQLite, please visit [David Tang's Deploying Laravel with SQLite to Heroku article](https://davidtang.io/deploying-laravel-with-sqlite-to-heroku/). 

Here are the steps you have to follow:

1. Make sure you are on the right branch and the features you want are on the main branch too.
2. Delete .sqlite reference from the .gitignore file located within the /database folder.
3. Add **"ext-pdo_sqlite": "*"** to the **require** block in **composer.json**
4. Open a Terminal window
5. Run this:

        composer update

6. Type these lines one by one to set your environment variables:

        heroku config:add APP_NAME=Laravel
        heroku config:add APP_ENV=production
        heroku config:add APP_DEBUG=true
        heroku config:add DB_CONNECTION=sqlite
        heroku config:add

7. Type these lines one by one as well, correcting them with the correct information:

        heroku config:add APP_URL=https://app-name.com/
        heroku config:add APP_KEY=...

8. Finally, I used to type **heroku config:add DB_DATABASE=database** in the Terminal, but this created a bug. This is probably a **step to avoid**. It apparently created the bug where I would get a message about **PRAGMA**, **foreign keys**, and the online app **not connecting to the database** properly.

___

## Downloading A Laravel Project From Github And Setting It Up

This information was found on [stackoverflow](http://stackoverflow.com/questions/48116952/ddg#48117041).

- Do this:

        composer install

- Rename .env.example as .env and update it with your database credentials (**DB_CONNECTION=sqlite**
and **DB_HOST=127.0.0.1** for this project).

- Then do this:


        php artisan key:generate

        php artisan serve 

___

## Tables, Migrations And Models

### Creating A New Table, Migration, Model And So Forth

To generate multiples files in a single command, use:

        php artisan make:model ModelName -mc

Note: In **-mc**, **m** stands for ***migration*** and **c** stands for ***controller***. You can also add **api** to the end of the string if you want to use AJAX.

This will create the:

- Migration
- Project model
- Controller

### Redoing A Migration

If you want to drop previously-created columns in your database and recreate them, use this command:

        php artisan migrate:fresh

## Creating A Controller By Itself

As a rule of thumb, you should have one controller per table in your database.

        php artisan make:controller AweSomeController

## Solving Different Bugs

### When attempting a new migration, you get the message "Dropped all tables successfully." and then the Terminal window hangs

- Your database is probably buggy and the migration cannot be finished. The most likely cause for this is having a line similar to this in your migration file:

        $table->message();

- Use this instead:

        $table->string('message');

### 500 | Server Error showing up instead of app

- Are you sure you have a .env file in your project? By default, it is excluded in the .gitignore file.

### Not being able to load CSS locally and remotely.

- This is probably caused by the fact that you are using HTTP locally and HTTPS remotely.
- The quick and dirty way of solving this is to load your assets twice:

        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
        <link rel="stylesheet" href="{{secure_asset('css/style.css')}}" />

- The asset() function is for local HTTP stuff and the secure_asset is for remote HTTPS stuff.

### Error Class 'App\Http\Controllers\Karaoke' not found

- Add this at the beginning of your controller file:

        use App\Models\Karaoke;


- If you're dealing with a many-to-many relationship, you might not have created your migration, controller and model at the same time, which is better. Just make sure your model has the right name. For instance this:

        return $this->belongsToMany(Category::class);

- Instead of this:

        return $this->belongsToMany(SongCategory::class);

### Unable to see categories/many-to-many relationships in JSON.

Make sure you have this in your controller file:

    "song" => $song->load('categories');

or this in your model:

    $with = ['categories']

### Unable to load CSS on Heroku (in production)

This is likely caused by CSS being loaded with HTTP instead of HTTPS when the rest of the app is loaded with HTTPS.

Change this:

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

To this:

    <link rel="stylesheet" href="css/style.css" />

This might not be the cleanest solution, but at least it works.

### could not find driver (SQL: PRAGMA foreign_keys = ON;)

This has to do with the SQLite database. Make sure you added this line to the require block composer.json file:

        "ext-pdo_sqlite": "*"

Then run:

        composer update

### 500 - Server Error

- Your project is probably missing the .env file. For security reasons, the .env file is not typically uploaded to Git repositories.

### Target class [PizzaController] does not exist.

Make sure you are using the right namespace. The namespace is not working the same way in older versions of Laravel. Please keep in mind that the string "Controller" should come right before the @ sign.

Go to your web.php file and change this:

        Route::get('/pizzas', 'PizzaController@index');

To this:

        Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index');

### Getting a token in the address bar instead of storing/updating the database

- Something is likely to be wrong with your form. This could be caused by:

    - The "method" attribute that your forgot for the &lt;form&gt; tag
    - Nesting a &lt;form&gt; tag inside of another form tag, etc.

### The PUT method is not supported for this route. Supported methods: GET, HEAD.

- Something is wrong with your route. The form route and the web.php route doesn't seem to be the same.

### SQLSTATE[23000]: Integrity constraint violation: 19 NOT NULL constraint failed: songs.name (SQL: update "songs" set "name" = ?, "artist" = ?, "lyrics" = ?, "link" = ?, "updated_at" = 2021-06-28 19:59:50 where "id" = 1)

- Something is wrong with the "name" and "id" attributes of your input fields. Are you sure they exist and they are named properly?
- Another possibility is that you're leaving a field empty and submitting the form when the database expects a non-null value. To solve this, to to your migrate file.

- And change this:

       $table->string('lyrics');

- To this:

       $table->string('lyrics')->nullable();

## Creating A Many-To-Many Relationship (Pivot Table)

Thanks to [Code with Daryl](https://www.youtube.com/watch?v=2oFNu_RhTt4) for providing his tutorial on YouTube. Also, thanks to [Qirolab](https://www.youtube.com/watch?v=JQ01o10Mva4).

____

- https://appdividend.com/2018/05/17/laravel-many-to-many-relationship-example/
- https://www.larashout.com/laravel-eloquent-many-to-many-relationship

___

1. To create a new model, migration and controller, type this in your terminal:

        php artisan make:model Category -mc

2. Find the place in your new migration that looks like this:

        $table->id();
        $table->timestamps();

3. Insert a new line so it looks like this:

        $table->id();
        $table->string('title');
        $table->timestamps();

4. Go back to the terminal and force a new migration with this:

        php artisan migrate:fresh

5. Go to the category table in your database and create this categories manually. Don't forget to save your modifications.

6. Now is time to create a migration for the pivot table. Let's assume you have two table. One is called "song" and the other is called "category". Create a pivot table using this command **while respecting the alphabetical order** (***category*** comes before ***song***):

        php artisan make:migration create_category_song_table --create=category_song

7. Go to the newest migration file and find this:

        $table->id();
        $table->timestamps();

8. Insert a new line so it looks like this (**once again, assuming one of the tables is called categories and the other songs**):

        $table->id();
        $table->integer('category_id')->unsigned();
        $table->integer('song_id')->unsigned();
        $table->timestamps();

9. Migrate again using the following command:

        php artisan migrate:fresh

10. Now, go to the **Song** model (assuming that's its name) under app/Models.

11. Find something that looks like this:

        use HasFactory;

12. Change it to this:

        use HasFactory;

        public function categories()
        {
                return $this->belongsToMany(Category::class);
        }

13. Now, go to the **Category** model (assuming that's its name) under app/Models.

14. Find something that looks like this:

        use HasFactory;

15. Change it to this:

        use HasFactory;

        public function songs()
        {
                return $this->belongsToMany(Song::class);
        }

16. Create a controller for your categories;

17. Add an index function that returns JSON to your CategoryController. This will confirm that everything is working just fine.

        /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {

                $categories = Category::all();

                return [
                "categories" => $categories,
                ];

        }

18. Create a route that returns a page with the content of the above index function.

19. Add a line such as this one to load the model in the SongController:

        use App\Models\Category;

##  Tinker - Laravel Debugging Tool

1. Open a Terminal window.

2. Type something like this:

        Song::first();

## VS Code Extensions

Must-Haves

- ESLint
    - Integrates ESLint JavaScript into VS Code
- Vetur
    - Vue tooling for VS Code
- PHP Intelephense / PHP IntelliSense

Optionals

- DotENV
    - support for dotenv file syntax
- favorites
    - mark resources (files or folders, local and remote) as favorites, so they can be esasily accessed
- Laravel blade snippets
    - Laravel blade snippets and syntax highlight support
- Laravel goto view
    - Quick jump to view
- Laravel-goto-controller
    - ALT + click to navigate from a route to a respective controller file
- Material Icon Theme
    - Material Design Icons for Visual Studio Code
- pgFormatter
    - A PostgreSQL formatter
- PHP Debug
    - Debug support for PHP with Xdebug
- Sass
    - Indented Sass syntax Hightlighting, Autocomplete & Formatter
- Vue Peek
    - Allows peek and goto definition for Vue single-file components

Recent discovery

- Laravel Extension Pack

## Using a controller for your routes

This assumes your controller has already been created.

- Go to /routes/web.php.
- Create a route like so, modifying the name of the controller and the method used to match names that exist:

	Route::get('/', "App\Http\Controllers\[YourController]@[yourMethod]");

- Go to App\Http\Controllers\[YourController].
- You create new routing methods like so:

    public function index()
    {
        return view("index", [
            "produits" => Produit::all(),
            "categories" => ProduitCategorie::all()
        ]);

        // JSON
        // return [
        //     "produits" => $produits,
        //     "categories" => $categories
        // ];

    }

## How to load assets (CSS, JS, etc.)

There are three ways of loading assets in Laravel.

- assets() (HTTP)
- secure_assets (HTTPS)
- mix() (apparently both, so this is what you should you if you intend to run your site both locally and remotely)

So for instance, your /resources/views/app.blade.php file should have a line like this one:

	<link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

## Populating your database automatically instead of manually

If you don't want to populate your database manually, you have several options.

- Using a seeder
- Using a route
- Using a migration

The optimal way is to use a seeder because you don't necessarily want to populate your database when you're in production. The easy solution is to use a migration or a route.

## Populating your database with a migration or a route

- Go to web.php or your migration file (/database/migrations/) depending on how you want your database to be populated.
- Import your model at the beginning of the file (this assumes your model is called NewMessage):

        use App\Models\NewMessage;

- Add this to your file if you want to add one record to the database:

        NewMessage::insert(
            ["message" => "test"]
        );

- Or this if you want to add multiple records to the database:

        NewMessage::insert([
            ["message" => "test 1"],
            ["message" => "test 2"]
        ]);

- If you are using a migration, remember that the insertion has to be done after creation of your schema, like so:

        public function up()
        {
			Schema::create('new_messages', function (Blueprint $table) {
				$table->id();
				$table->string('message')->nullable();
				$table->timestamps();
			});

			NewMessage::insert(
				["message" => "test 3"]
			);
        }

- If you're using a route instead, if should look like this:

	// to populate the database
	Route::get("/pop", function () {
		NewMessage::create(["message" => "testala"]);

		return ("Populated the database.");
	});







