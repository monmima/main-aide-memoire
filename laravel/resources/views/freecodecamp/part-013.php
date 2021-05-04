<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <form action="part-013.php" method="GET">

        Name: <input type="text" name="name"><br>

        <button type="submit">Submit</button>

    </form>

    <?php
        echo $_GET["age"];
    ?>

</body>
</html>