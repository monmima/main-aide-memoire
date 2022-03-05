# PHP Aide-Mémoire

## Preparing your system.

1. Install PHP.

        sudo apt install php

1. Find out what version of PHP your are running.

        php --version

1. Install the the SQLite driver for your version of PHP. **This assumes that you are running version 7.4 of PHP.**

        sudo apt-get install php7.4-sqlite3

## Running a project

Go to your project folder, open a Terminal window and type:

    php -S localhost:1234
