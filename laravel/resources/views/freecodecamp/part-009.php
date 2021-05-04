<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>

    <!-- WORKING WITH NUMBERS -->
    
    <?php
        echo 40 . "<br>";

        echo -41.847 . "<br>";

        echo 5 + 9 . "<br>";

        // order of operations
        echo (4 + 5) * 10 . "<br>";

        $num = 10;
        echo $num . "<br>";

        $num++;

        echo $num . "<br>";

        // find the absolute value of a number
        echo abs(-100) . "<br>";

        // 2 raised to the fourth power
        echo pow(2, 4) . "<br>";

        // square root
        echo sqrt(144) . "<br>";

        // compare numbers
        echo max(2, 10) . "<br>";

        // round numbers
        echo round(3.2) . "<br>";

        // round up number
        echo ceil(3.3) . "<br>";

        // round down number
        echo floor(3.9) . "<br>";
    ?>
</body>
</html>