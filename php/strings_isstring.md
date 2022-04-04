# Finding if a value is a string

    <?php
        $val = "Hello";
        $output = is_string($val);

        echo $output;
    ?>

A few examples of what may or may not be a string.

    $values = [true, false, null, "abc", 33, "33", 22.4, "22.4", "", " ", 0, "0"];

    foreach ($values as $value) {
        if (is_string($value)) {
            echo "{$value} is a string<br>";
        }
    }