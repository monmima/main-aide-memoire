<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php
        // function to cube a number

        function cubeNumber($whatNum) {
            # you could also return nothing just to return to a function
            return $whatNum * $whatNum * $whatNum;

            # doesn't get printed out because you are ejected from the function with "return"
            echo "Hello";
        }

        echo cubeNumber(4) . "<br>";
    ?>
</body>
</html>