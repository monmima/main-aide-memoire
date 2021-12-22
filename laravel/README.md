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

Make sure you have the correct dependencies installed:

1. Make sure Composer is installed.

        composer -V

1. Make sure NPM is installed.

        npm -v

1. Make sure PHP is installed.

        php -v

1. To set up a new project using VueJS, go see the VueJS part of this aide-mémoire.
1. Now to install Laravel, run these commands:

        laravel new [my-web-app-name]
        php artisan key:generate
        php artisan serve

1. Now go to your browser and type http://localhost:8000/ in the address bar.

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

## Creating A Controller By Itself

As a rule of thumb, you should have one controller per table in your database.

        php artisan make:controller AweSomeController

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

## API, CORS and Laravel

If a page in your project renders data as JSON, by default, Laravel will know how to handle this properly. This means you won't get CORS errors.




