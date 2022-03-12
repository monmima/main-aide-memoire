# Forms: a basic calculator

    <form action="index.php" method="post">

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