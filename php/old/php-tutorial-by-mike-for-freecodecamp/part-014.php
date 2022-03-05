<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <!-- GET VS POST -->

    <p>Since the POST method is being used here nothing shows up in the adress bar above. Passwords should always be handled with the POST method.</p>

    <!-- The content of POST does not show up in the URL. -->

    <form action="part-014.php" method="POST">
        Password: <input type="password" name="password"><br>

        <button type="submit">Submit</button>
    </form>

    <?php
        echo $_POST["password"];
    ?>

</body>
</html>