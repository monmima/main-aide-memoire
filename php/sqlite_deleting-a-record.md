## SQLite: Deleting a record with a form

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
