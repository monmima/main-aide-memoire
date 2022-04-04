# Arrays

## Types of arrays

* Indexed
* Associative
* Multi-dimensional

### Indexed arrays

This is an easier and probably the most common type of array.

First way of creating an indexed array.

    <?php
        $cars = array("red", "green", "blue");

        var_dump($cars); // array(3) { [0]=> string(3) "red" [1]=> string(5) "green" [2]=> string(4) "blue" } 
    ?>

Second way of creating an indexed array.

    <?php
        $cars = ["red", "green", "blue"];

        var_dump($cars); // array(3) { [0]=> string(3) "red" [1]=> string(5) "green" [2]=> string(4) "blue" } 
    ?>

## Associative arrays

	$people = array("Brad" => 35, "Jose" => 32, "William" => 37);

	echo $people["Brad"]; // 35

## Multidimensional arrays (arrays within arrays)

    <?php
        $cars = array(
            array("red", 20, 10),
            array("green", 20, 10),
            array("blue", 20, 10)
        );

        echo $cars[1][0];
    ?>