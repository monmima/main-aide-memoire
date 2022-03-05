<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <!-- Getting user input -->

    <!-- action is the name of the php page that we want to be able to handle this form -->
    <form action="part-010.php" method="GET">
        Name: <input type="text" name="username">
        <button type="submit">Submit</button>
    </form>

    Your name is
    <?php
        echo $_GET["username"];
    ?>

</body>
</html>