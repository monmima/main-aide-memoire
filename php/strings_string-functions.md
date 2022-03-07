# String functions

## Capitalizing

    echo strtoupper($string);

## Turning to lower-case

    echo strtolower($string);

## Getting the length of a string

    echo strlen($string);

## Getting the first character from a string

    echo $string[0];

## Changing a letter in a string;

    <?php
        $string = "Mike";
        $string[0] = "Bike";

        echo $string;
    ?>

## Replacing part of a string

    <?php
        $string = "Giraffe Academy";
        
        echo str_replace("Giraffe", "Panda", $string);
    ?>

## Getting a substring

    <?php
        $string = "Giraffe Academy";
        
        echo substr($string, 8);
    ?>
