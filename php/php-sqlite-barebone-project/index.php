<h1>test</h1>

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

