# Using SQLite locally on Linux Mint

https://www.codementor.io/@goodnesskay/developing-locally-using-sqlite-with-laravel-on-ubuntu-8s8358503

Thanks to [Coder's Tape
](https://www.youtube.com/watch?v=kWmnQvznkUI) for creating his tutorial on YouTube on how to change the default SQL database settings to SQLite.

1. Go to the .env file.
1. Find this string:

		DB_CONNECTION=mysql
		
1. Replace it with this string:

		DB_CONNECTION=sqlite

1. Delete all other lines starting with the prefix **DB_**.

		DB_HOST=127.0.0.1
		DB_PORT=3306
		DB_DATABASE=[your-project-name]
		DB_USERNAME=root
		DB_PASSWORD=

1. Create a database through the Terminal or manually

        touch database/database.sqlite

1. Install possibly missing dependencies

        composer require doctrine/dbal

1. Add this line to the require block in your composer.json file:

        "ext-pdo_sqlite": "*"

1. Run this command:

        composer update


1. **Watch out!**  At this point you might get this error message:

	> Root composer.json requires PHP extension ext-pdo_sqlite * but it is missing from your system. Install or enable PHP's pdo_sqlite extension.

1. If that's the case, try to run this command:

		sudo apt-get install php-sqlite3

1. Go to the root folder, open a Terminal window and type:

        php artisan migrate

1. If everything went fine, the Terminal window should make it pretty clear that new tables have been created in your database.