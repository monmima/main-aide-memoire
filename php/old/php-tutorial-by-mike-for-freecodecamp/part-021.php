<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php
        echo max(3, 6) . "<br>";


        # my own personal "max()" function

        function getMax($num1, $num2) {
            if ($num1 > $num2) {
                return $num1;
            } else {
                return $num2;
            }
        }

        echo getMax(300, 90) . "<br>";

    ?>
</body>
</html>