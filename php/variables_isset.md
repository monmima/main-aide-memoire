# Checking if a variable is set or not

    <?php
        $test = 5;
        $test2 = 6;

        if (isset($test)) {
            echo "Variable '\$test' is set.";
        }

        if (!isset($test2)) {
            echo "Variable '\$test2' is not set.";
        }
    ?>