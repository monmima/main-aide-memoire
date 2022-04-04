# Replacing an item in an array

## In an indexed array

    <?php
        $cars = ["red", "green", "blue"];
        $cars[1] = "purple";
    ?>

## In an associative array

    <?php
        $grades = ["Jim" => "A+", "Pam" => "B-", "Oscar" => "C+"];
        $grades["Jim"] = "F";
        echo $grades["Jim"]; // F
    ?>