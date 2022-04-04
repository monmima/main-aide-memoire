<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP + SQLite</title>
    <style>

        body {
            display: grid;

            grid-template-rows: auto 1fr auto;

            /* flex-direction: column;

            justify-content: space-between;
            align-items: space-between;
            justify-items: space-between;
            align-content: space-between; */

            min-height: 95vh;
            /* background-color: blue; */
        }

        body > * {
            /* background-color: red; */
            margin: 5px;
        }


        footer {
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        main {
            display: grid;
            grid-template-columns: 1fr 1fr;

            justify-items: center;
        }

       .gray-area {
            background-color: #f5f5f5;
            margin: 15px;
            padding: 15px;
        }

        /*MEDIA QUERIES*/
        @media screen and (max-width: 600px) {
            main {
                display: flex;
                flex-direction: column;
            }
        }


    </style>
</head>
<body>
    <h1>Super CRUD PHP + SQLite</h1>

    <main>
        <div>

            <div class="gray-area">
                <div>
                    <a href="/add.php" title="Add record">Add record</a>
                </div>

                <?php
                    // define PDO - tell about the database file
                    $pdo = new PDO("sqlite:database.db");

                    // write SQL
                    $statement = $pdo->query("SELECT * FROM students_tb");

                    // run the SQL
                    $students = $statement->fetchAll(PDO::FETCH_ASSOC);

                    echo "<ul>";

                    // show it on the screen as HTML
                    foreach($students as $row => $student) {
                        echo "<li><a href=\"/view.php?id=" . $student['id']  . "\">" . $student['sname'] . "</a> - <a href='delete.php?id=" . $student['id']  . "'>Erase this record</a></li>";
                    }

                    echo "</ul>";
                ?>
            </div>

        </div>

        <aside>
            <div class="gray-area">
                Technologies used for this project:

                <ul>
                    <li>PHP</li>
                    <li>SQLite</li>
                    <li>Heroku</li>
                </ul>

                <p><a href="https://github.com/monmima/php-sqlite-crud" title="Source code on Github">Source code available on Github.</a></p>
            </div>

        </aside>

    </main>
    
    <footer>
        <time datetime="2021-11">November 2021</time>
    </footer>

</body>
</html>