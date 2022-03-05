## SQLite: connecting to the database

https://www.youtube.com/watch?v=bR3nxnCGqmY&list=PLU70qqWW4frENsWYAm-tAKp2ZJQ_dt3WR&index=2

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
