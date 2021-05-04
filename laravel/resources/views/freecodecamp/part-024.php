<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>

    <?php
        # while loop

        $index = 1;

        while($index <= 5) {
            echo "$index <br>";
            $index++;
        }

        # do while loop
        # same as a while loop, but the condition is checked aftwerwards
        do {
            echo "$index <br>";
            $index++;
        } while($index <= 5);
    ?>
    
</body>
</html>