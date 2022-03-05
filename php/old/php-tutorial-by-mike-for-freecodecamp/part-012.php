<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>

    <form action="part-012.php" method="GET">

        Color: <input type="text" name="color"><br>

        Plural noun: <input type="text" name="pluralNoun"><br>

        Celebrity: <input type="text" name="celebrity"><br>
    
        <button type="submit">Submit</button>

    </form>

    <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];

        echo "Roses are $color <br>";

        echo "$pluralNoun are blue <br>";

        echo "I love $celebrity <br>";
    ?>

</body>
</html>