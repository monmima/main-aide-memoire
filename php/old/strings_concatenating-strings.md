# Concatenating strings

There are two ways of concateneting strings. One involves the use of "<code>.</code>" and the other is similar to templates literals in JavaScript.

    <?php
        $string1 = "Hello";
        $string2 = "World!";

        echo $string1 . " " . $string2;
        echo "<br>";
        echo "$string1 $string2";
    ?>