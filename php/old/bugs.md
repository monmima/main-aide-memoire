# Possible bugs

## PDOException: could not find driver in [path to your project]

If you run into this bug, it's probably because you have not installed php7.4-sqlite. See above for more about this.

## Uncaught PDOException: could not find driver

1. Find out what version of PHP your are running.

        php --version

1. Install the the SQLite driver for your version of PHP. **This assumes that you are running version 7.4 of PHP.**

        sudo apt-get install php7.4-sqlite3