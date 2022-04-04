## SQLite: returning an HTML list

https://www.youtube.com/watch?v=JuZMjPRwXPo&list=PLU70qqWW4frENsWYAm-tAKp2ZJQ_dt3WR&index=3

    <?php
        // define PDO - tell about the database file
        $pdo = new PDO("sqlite:database.db");

        // write SQL
        $statement = $pdo->query("SELECT * FROM students_tb");

        // run the SQL
        $students = $statement->fetchAll(PDO::FETCH_ASSOC);

        // show it on the screen as HTML
        foreach($students as $row => $student) {
            echo "<p>" . $student['sname'] . "</p>";
        }
    ?>