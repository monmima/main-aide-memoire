# Using SQLite locally on Linux Mint

https://www.codementor.io/@goodnesskay/developing-locally-using-sqlite-with-laravel-on-ubuntu-8s8358503

Thanks to [Coder's Tape
](https://www.youtube.com/watch?v=kWmnQvznkUI) for creating his tutorial on YouTube on how to change the default SQL database settings to SQLite.

1. Go to the .env file
1. Replace **DB_CONNECTION=mysql** with **DB_CONNECTION=sqlite**
1. Erase all the other database-related lines (all lines starting with the prefix "DB_") such as DB_HOST=127.0.0.1, DB_PASSWORD=, etc.
1. Create a database through the Terminal or manually

        touch database/database.sqlite

1. Install possibly missing dependencies

        composer require doctrine/dbal

1. Add this line to the require block in your composer.json file:

        "ext-pdo_sqlite": "*"

1. Run this command:

        composer update

1. Go to the root folder, open a Terminal window and type:

        php artisan migrate

1. If everything went fine, your database should now have a few tables that were automatically created such as failed_jobs, etc.