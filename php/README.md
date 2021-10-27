# PHP Aide-Mémoire

## Preparing your system.

    sudo apt install php
    sudo apt-get install php7.4-sqlite

## Running a project

Go to your project folder, open a Terminal window and type:

    php -S localhost:1234

## Making PHP arrays readable

Instead of just this:

    var_dump($rows);

Use this:

    echo "<pre>";
    var_dump($rows);
    echo "</pre>";

Or even better:

    echo "<pre>";
    print_r($rows);
    echo "</pre>";

## Connecting to a SQLite database with PHP

https://www.youtube.com/watch?v=bR3nxnCGqmY&list=PLU70qqWW4frENsWYAm-tAKp2ZJQ_dt3WR&index=2

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
                echo "<pre>";
                print_r($rows);
                echo "</pre>";
            ?>
        </pre>

1. Create a database.
1. Create a students_tb table.
1. Fill the table with content.

## Displaying database records as an unordered list using a foreach loop - PHP and SQLITE

https://www.youtube.com/watch?v=JuZMjPRwXPo&list=PLU70qqWW4frENsWYAm-tAKp2ZJQ_dt3WR&index=3

    <?php
        // define PDO - tell about the database file
        $pdo = new PDO("sqlite:database.db");

        // write SQL
        $statement = $pdo->query("SELECT * FROM demo_table");

        // run the SQL
        $students = $statement->fetchAll(PDO::FETCH_ASSOC);

        // show it on the screen as HTML
        foreach($students as $row => $student) {
            echo "<p>" . $student['name'] . "</p>";
        }
    ?>

## Displaying database records as a HTML table using a foreach loop - PHP and SQLITE

https://www.youtube.com/watch?v=1Lhplcvvz-4&list=PLU70qqWW4frENsWYAm-tAKp2ZJQ_dt3WR&index=4

    <?php
        // define PDO - tell about the database file
        $pdo = new PDO("sqlite:database.db");

        // write SQL
        $statement = $pdo->query("SELECT * FROM demo_table");

        // run the SQL
        $students = $statement->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border=1>";

        echo "<tr>";
            echo "<td>Title</td>";
            echo "<td>Score</td>";
        echo "</tr>";

        // show it on the screen as HTML
        foreach($students as $row => $student) {
            echo "<tr>";
                echo "<td>" . $student['name'] . "</td>";
                echo "<td>" . $student['score'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    ?>

## Possible bugs

___

### PDOException: could not find driver in [path to your project]

If you run into this bug, it's probably because you have not installed php7.4-sqlite. See above for more about this.

___



