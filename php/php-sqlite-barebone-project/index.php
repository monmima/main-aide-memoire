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

