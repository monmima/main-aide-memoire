<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>

    <!-- arrays -->

    <?php
        $friends = array("Kevin", "Karen", "Oscar", "Jim");

        echo $friends[0] . "<br>";
        echo $friends[1] . "<br>";
        echo $friends[2] . "<br>";

        // modifying an element in the array
        $friends[1] = "Dwight";
        echo $friends[1] . "<br>";

        // adding information to an array
        $friends[4] = "Angela";
        echo $friends[4] . "<br>";

        // length of an array
        echo count ($friends) . "<br>";
    ?>


</body>
</html>