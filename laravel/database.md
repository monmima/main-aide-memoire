# Working with databases in Laravel

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

## Redoing A Migration

If you want to drop previously-created columns in your database and recreate them, use this command:

    php artisan migrate:fresh

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
