<!-- 15.01 -->
<!-- https://www.youtube.com/watch?v=cyl0Oj3rmmg&list=PLU70qqWW4frENsWYAm-tAKp2ZJQ_dt3WR&index=8 -->

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
                    echo "<p><a href='/'>Go back to the main page.</a></p>";
                } else {
                    echo "The student has NOT been added to the database.";
                    echo "<p><a href='/'>Go back to the main page.</a></p>";
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