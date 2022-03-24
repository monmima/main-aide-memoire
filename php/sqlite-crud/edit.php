<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input, label {
            display: block;
        }
    </style>
</head>
<body>
    <?php 
        // $db->close();
        // echo $_GET['id'];
    ?> 
    <?php if ($_REQUEST["actionx"] =="") { ?>
    <!-- get database content -->
    <?php
        // define PDO - tell about the database file
        $db = new PDO("sqlite:database.db");

        try {
            $sql = "SELECT * FROM students_tb WHERE id=:myId";

            // prepare statement
            $statement = $db->prepare($sql);

            // get value from querystring and bind
            $id = filter_input(INPUT_POST, "id");
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

    <form action="edit.php" method="post">

        <label for="sname">Student's Name</label>
        <input type="text" name="sname" required value="<?php echo htmlspecialchars($r['sname']); ?>">

        <label for="score">Score</label>
        <input type="number" name="score" required value="<?php echo htmlspecialchars($r['score']); ?>">
    <input type=hidden name=id value="<?php echo $_REQUEST["id"]; ?>">

    <input type=hidden name=actionx value="update">

    <button type="submit" name="submit">Submit</button>

    </form>
    <?php } ?>


    <?php if ($_REQUEST["actionx"] !="") { ?>

    <?php

        try {
            $id = $_POST['id'];

            $db = new PDO("sqlite:database.db");
            // print out error messages is something goes wrong
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "UPDATE students_tb SET sname = :sname, score = :score WHERE id = :id";


            $stat = $db->prepare($sql);

            // named params

            $sname = filter_input(INPUT_POST, "sname");
            $stat->bindValue(":sname", $sname, PDO::PARAM_STR);

            $score = filter_input(INPUT_POST, "score");
            $stat->bindValue(":score", $score, PDO::PARAM_INT);

            $id = filter_input(INPUT_POST, "id");
            $stat->bindValue(":id", $id, PDO::PARAM_INT);

            
            $success = $stat->execute();

            // does the value exist?
            if ($success) {
                echo "The student has been updated in the database.";
                echo "<p><a href='index.php'>Go back to the main page.</a></p>";
            } else {
                echo "The student has NOT been updated in the database.";
                echo "<p><a href='index.php'>Go back to the main page.</a></p>";
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