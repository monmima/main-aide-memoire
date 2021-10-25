# PHP and SQLite barebone project - without XAMPP

This is a barebone project which shows that you can connect PHP to a SQLite database without installing XAMPP on your system.

Thanks to MainlyWebStuff for creating his short [Connecting to a SQLite database with PHP](https://www.youtube.com/watch?v=bR3nxnCGqmY) tutorial, which is basically what this is based on.

## Installing this project

    sudo apt install php
    sudo apt-get install php7.4-sqlite

## Running this project

    php -S localhost:1234

## Possible bugs

### PDOException: could not find driver in [path to your project]

If you run into this bug, it's probably because you have not installed php7.4-sqlite. See above for more about this.

    

