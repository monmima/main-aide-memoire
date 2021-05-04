<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <form action="part-016.php" method="post">

        <!-- "fruits[]" means that you store checkbox data inside of an array -->
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>

        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>

        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>

        <button type="submit">Submit</button>
        
    </form>

    <?php
        $fruits = $_POST["fruits"];

        echo $fruits[0];
    ?>

</body>
</html>