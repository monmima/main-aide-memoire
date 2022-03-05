<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <!-- SIMPLE CALCULATOR -->
    <!-- THE NUMBERS BEING ADDED ARE VISIBLE IN THE ADRESS BAR -->

    <form action="part-011.php">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">

        <p><button type="submit">Submit</button></p>
    </form>


    Answer:
    <?php
        echo $_GET["num1"] + $_GET["num2"];
    ?>

</body>
</html>