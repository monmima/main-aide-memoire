# PHP Aide-Mémoire

Some of the content of this aide-mémoire is inspired by Brad Traversy's [PHP Front To Back](https://youtu.be/9p9siksrSoU) series.

## Preparing your system

This assumes you are using Linux Mint or Ubuntu.

1. Install PHP.

        sudo apt install php

1. Find out what version of PHP your are running.

        php --version

1. Install the the SQLite driver for your version of PHP. **The example below assumes that you are running version 7.4 of PHP.**

        sudo apt-get install php7.4-sqlite3

## Running a project

1. Go to your project folder.
1. Open a Terminal window and create a server on port 1234:

        php -S localhost:1234

1. If you have an index.php file, just click on [localhost:1234](http://localhost:1234) in the Terminal window to open the page in your browser.
1. If the name of the file is different, for example test.php, you need to go to [localhost:1234/test](http://localhost:1234/test) instead.
