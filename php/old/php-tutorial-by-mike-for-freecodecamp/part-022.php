<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <form action="part-022.php" method="post">

        <!-- STEP is used to allow decimal points --> 
        First num: <input type="number" step="0.00001" name="num1"><br>
        OP: <input type="textbox" name="op"><br>
        Second num: <input type="number" step="0.00001" name="num2"><br>

        <button type="submit">Submit</button>

    </form>

    <?php

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if ($op == "+") {
            echo $num1 + $num2;
        } else if ($op == "-") {
            echo $num1 - $num2;
        } else if ($op == "/") {
            echo $num1 / $num2;
        } else if ($op == "*") {
            echo $num1 * $num2;
        } else {
            echo "Invalid operator";
        }

    ?>
</body>
</html>