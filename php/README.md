# PHP Aide-Mémoire

## Preparing your system.

    sudo apt install php
    sudo apt-get install php7.4-sqlite

## Running a project

Go to your project folder, open a Terminal window and type:

    php -S localhost:1234

## Creating a barebone project (PHP + SQLite)

Thanks to MainlyWebStuff for creating his short [Connecting to a SQLite database with PHP](https://www.youtube.com/watch?v=bR3nxnCGqmY) tutorial, which is basically what this is based on.

1. Create an index.php file.
1. Open it and copy and paste this:

        <h1>test</h1>

        <p>Run this project with <code>php -S localhost:1234</code>.</p>

        <p>Content from the database should show up below.</p>

        <hr>

        <pre>
            <?php
                // define PDO - tell about the database file
                $pdo = new PDO("sqlite:test.db");

                // write SQL
                $statement = $pdo->query("SELECT * FROM students_tb");

                // run the SQL
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

                // show it on the screen
                var_dump($rows);
            ?>
        </pre>

1. Create a database.
1. Create a students_tb table.
1. Fill the table with content.

## Possible bugs

___

### PDOException: could not find driver in [path to your project]

If you run into this bug, it's probably because you have not installed php7.4-sqlite. See above for more about this.

___



