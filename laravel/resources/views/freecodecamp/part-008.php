<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    
    <!-- WORKING WITH STRINGS -->

    <?php

        $string = "Giraffe Academy<br>";

        echo $string;
        echo strtolower($string);
        echo strtoupper($string);
        echo strlen($string) . "<br>";
        echo $string[0] . "<br>"; // first character of a string
        echo "Mike"[0] . "<br>"; // same thing

        $string[0] = "B";
        echo $string . "<br>"; // first character of a string

        // replacing a string
        $string = "Giraffe Academy<br>";
        echo str_replace("Giraffe", "Panda", $string);

        echo substr($string, 8);

    ?>

</body>
</html>