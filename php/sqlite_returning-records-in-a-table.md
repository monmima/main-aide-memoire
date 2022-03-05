## SQLite: returning records in a HTML table

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
