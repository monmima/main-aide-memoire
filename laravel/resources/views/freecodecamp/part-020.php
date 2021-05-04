<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php
        $isMale = true;
        $isTall = true;

        // &&
        // ||

        if ($isMale && $isTall) {
            echo "You are a tall male.";
        } else if ($isMale && !$isTall) {
            echo "You are a short male.";
        } else if (!$isMale && $isTall) {
            echo "You are not male but are tall.";
        } else {
            echo "You are not male and not tall.";
        }
    ?>
</body>
</html>