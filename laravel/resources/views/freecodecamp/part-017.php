<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <p>This form returns the grade of a student, which is stored in an array.</p>
    <form action="part-017.php" method="POST">

        <input type="text" name="student">

        <button type="submit">Submit</button>

    </form>

    <?php
        // ASSOCIATIVE ARRAY

        // IN AN ASSOCIATIVE ARRAY, YOU ACCESS ELEMENTS USING WHAT IS CALLED A "KEY" ("Jim", "Pam", "Oscar")

        $grades = ["Jim" => "A+", "Pam" => "B-", "Oscar" => "C+"];

        // printing the whole array
        print_r($grades);
        echo "<br>";

        // printing an element in the array
        echo $grades["Oscar"] . "<br>";

        // changing an element in the array
        $grades["Jim"] = "F";
        echo $grades["Jim"] . "<br>";

        // count elements in an array
        echo count($grades) . "<br>";

        // accessing the content of the array
        echo "<strong>" . $grades[$_POST["student"]] . "</strong>";
    ?>
</body>
</html>