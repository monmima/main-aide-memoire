## SQLite: counting the number of records and finding the lowest score

https://www.youtube.com/watch?v=Ls04HnBngso&list=PLU70qqWW4frENsWYAm-tAKp2ZJQ_dt3WR&index=5

    <?php
        // https://www.youtube.com/watch?v=JuZMjPRwXPo&list=PLU70qqWW4frENsWYAm-tAKp2ZJQ_dt3WR&index=3
        
        // run the app

        // define PDO - telle about the database file
        $pdo = new PDO("sqlite:database.db");

        // count rows in the movie table
        $statement = $pdo->query("SELECT COUNT(*) FROM students_tb");
        $studentCount = $statement->fetchColumn();
        echo "<p>The number of records is " . $studentCount . ".</p>";

        // find lowest score
        $statement = $pdo->query("SELECT MIN(score) FROM students_tb");
        $lowScore = $statement->fetchColumn();
        echo "<p>The lowest score is " . $lowScore . ".</p>";
    ?>