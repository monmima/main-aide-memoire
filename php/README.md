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

## SQLite: displaying a single record

https://www.youtube.com/watch?v=Fg7fih7vi0A&list=PLU70qqWW4frENsWYAm-tAKp2ZJQ_dt3WR&index=7

To display a page, you would have to type something like this in the address bar:

* http://localhost:1234/index.php?id=1

        <?php
            // define PDO - tell about the database file
            $db = new PDO("sqlite:database.db");

            try {
                $sql = "SELECT * FROM students_tb WHERE id=:myId";

                // prepare statement
                $statement = $db->prepare($sql);

                // get value from querystring and bind
                $id = filter_input(INPUT_GET, "id");
                $statement->bindValue(":myId", $id, PDO::PARAM_INT);

                // execute the query
                $statement->execute();

                // create array of records
                $r = $statement->fetch();
                $db = null;

                // check contents of array
                if (!$r) {
                    echo "No record found";
                } else {
                    echo "record found";
                }
            }

            catch (PDOException $e) {
                print "We had an error: " . $e->getMessage() . "<br>";
                die();
            }
        ?>

        <h1><?php echo htmlspecialchars($r['id']); ?></h1>
        <p>Description: <?php echo htmlspecialchars($r['sname']); ?></p>
        <p>Score: <?php echo htmlspecialchars($r['score']); ?></p>

## SQLite: Inserting a record from a form

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Student</title>
        <style>
            label, input {
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>Add student to database</h1>
        
        <?php
            // has the form been submitted?
            // if not, show the HTML form
            if (!isset($_POST['submit'])) {
        ?>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

            <label for="sname">Student's Name</label>
            <input type="text" name="sname" required>

            <label for="score">Score</label>
            <input type="number" name="score" required>

            <button type="submit" name="submit">Submit</button>

        </form>

        <?php
            } else {
                try {
                    $db = new PDO("sqlite:database.db");
                    $sql = "INSERT INTO students_tb (sname, score) VALUES (:sname, :score)";
                    $stat = $db->prepare($sql);

                    // named params

                    $sname = filter_input(INPUT_POST, "sname");
                    $stat->bindValue(":sname", $sname, PDO::PARAM_STR);

                    $score = filter_input(INPUT_POST, "score");
                    $stat->bindValue(":score", $score, PDO::PARAM_INT);
                    
                    $success = $stat->execute();

                    // does the value exist?
                    if ($success) {
                        echo "The student has been added to the database.";
                    } else {
                        echo "The student has NOT been added to the database.";
                    }

                    $db = null;

                } catch (PDOException $e) {
                    // for development
                    print "We had an error: " . $e->getMessage() . "<br>";
                    die();
                }

            }
        ?>
        
    </body>
    </html>

## SQLite: Deleting a record from a form

Your index page (index.php) or whatever page you're using to delete data should have something like this:

    // show it on the screen as HTML
    foreach($students as $row => $student) {
        echo "<li><a href=\"/one.php?id=" . $student['id']  . "\">" . $student['sname'] . "</a> - <a href='delete.php?id=" . $student['id']  . "'>Erase this record</a></li>";
    }

The deletion page (delete.php) should look like this:

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Student</title>
        <style>
            label, input {
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>Delete student from database</h1>
        
        <?php
            // get the parameter called id for the URL
            $id = $_GET['id'];

            try {
                $db = new PDO("sqlite:database.db");
                // $sql = "INSERT INTO students_tb (sname, score) VALUES (:sname, :score)";
                $sql = "DELETE FROM students_tb WHERE id = $id";

                // DELETE FROM students_tb WHERE id = 1

                $stat = $db->prepare($sql);
                
                $success = $stat->execute();

                // does the value exist?
                if ($success) {
                    echo "The student has been deleted from the database.";
                } else {
                    echo "The student has NOT been deleted from the database.";
                }

                $db = null;

            } catch (PDOException $e) {
                // for development
                print "We had an error: " . $e->getMessage() . "<br>";
                die();
            }


        ?>
        
        <p><a href="/">Go back to the main page.</a></p>

    </body>
    </html>

## SQLite: Updating a record

You can find more information about how to update a record using both SQLite and PHP here:

- https://stackoverflow.com/questions/69860263/updating-sqlite-database-with-php?noredirect=1#comment123490521_69860263
- https://github.com/monmima/php-sqlite-crud

## Possible bugs

___

### PDOException: could not find driver in [path to your project]

If you run into this bug, it's probably because you have not installed php7.4-sqlite. See above for more about this.

___



